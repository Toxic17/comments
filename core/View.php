<?php
    namespace comments\core;
    class View
    {
        public function init()
        {
            $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../app/views');
            $twig = new \Twig\Environment($loader, /*[
                'cache' => __DIR__.'/../app/views/cache',
            ]*/);
            return $twig;
        }
    }
?>