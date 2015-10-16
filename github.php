<?php
require_once "vendor/autoload.php";
require_once "TwigAccess.php";

use Guzzle\Http\Client;

if (isset($_GET['user']) && $_GET['user']!=''){
    $client = new Client("https://api.github.com");
    $request = $client->get('/users/'.$_GET['user']);
    $url=$request->getUrl();
    $response = $request->send();

    $answer=json_decode($response->getBody(),true);
    echo TwigAccess::twigRender('github.html.twig',array(
        'url'=>$url,
        'data'=>$answer
    ));
} else {
    echo TwigAccess::twigRender('error.html.twig');
}


