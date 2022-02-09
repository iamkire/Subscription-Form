<?php

class Route {

    private $routes;
    private $queryBuilder;

    public function __construct(array $routes, QueryBuilder $queryBuilder)
    {
        $this->routes = $routes;
        $this->queryBuilder = $queryBuilder;
    }


    public function getUri()
    {
        return trim($_SERVER["REQUEST_URI"], '/');
    }


    public function direct($uri)
    {
        if(!array_key_exists($uri, $this->routes)) {

            throw new Exception('Unknown route');
        }

        $parts = explode('@', $this->routes[$uri]);

        $className = $parts[0];
        $method = $parts[1];

        $class = new $className($this->queryBuilder);
        $class->$method();
    }

}