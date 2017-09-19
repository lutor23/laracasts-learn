<?php

class Router
{
    protected $routes= [
        'GET' => [],
        'POST' => []
    ];


    public static function load($file)
    {
        $router = new static;

        require $file;
        
        return $router;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        var_dump($uri);
        var_dump($requestType);
        throw new Exception('No routes defined for this URI');
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri]=$controller;
    }
}
