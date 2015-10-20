<?php
require_once 'vendor/autoload.php';

Class TwigAccess
{
    public static function twigRender($template, $variables = array())
    {
        $loader = new Twig_Loader_Filesystem('templates/');
        $twig = new Twig_Environment($loader);
        return $twig->render($template, $variables);
    }

}



