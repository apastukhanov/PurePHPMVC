<?php


namespace App\Dispatchers;

use App\WebRoutes\Route;


class Dispatcher {

    private $requestMethod;
    private $requestUri;

    public function __construct($requestMethod, $requestUri) {
        $this->requestMethod = $requestMethod;
        $this->requestUri = $requestUri;
    }

    public function dispatch() {
        foreach (Route::$routes[$this->requestMethod] as $route => $action) {
            if ($route === $this->requestUri) { 
                return $this->executeAction($action);
            }
        }
    
        http_response_code(404);
        echo '404 Not Found';
    }
      
    private function executeAction($action) {
        if (is_callable($action)) {
            return $action();
        }
    
        list($controller, $method) = $action;
        
        $controller = new $controller();
        return $controller->$method();
    }

}