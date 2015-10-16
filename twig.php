<?php

require_once "vendor/autoload.php";
require_once "TwigAccess.php";

if(isset($_GET['user']) && $_GET['user']!=''){
    echo TwigAccess::twigRender("hello.html.twig",
        array('user'=>$_GET['user']));
} else {
    echo TwigAccess::twigRender("error.html.twig");
}

