<?php 

    session_start();

    include 'classes/Component.cls.php';
    include 'app/Models/Car.php';
    include 'app/Http/Routes/Route.php';
    include 'app/Http/Dispatchers/Dispatcher.php';
    include 'routes/web.php';
    include 'include/func.inc.php';
    include 'app/Http/Controllers/Controller.php';


    use App\Dispatchers\Dispatcher;
    
    $routes = [
        '/' => 'home',
        '/index.php' => 'home',
        '/about' => 'home',
        '/cars' => 'car',
        '/contacts' => 'contacts',
        '/table' => 'table',
        '/login' => 'login',
        '/logout' => 'logout'
    ];


    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    $dispatcher = new Dispatcher($requestMethod, $requestUri);
    $dispatcher->dispatch();

    /*
    // $url = $_SERVER['REQUEST_URI'];
    // $whitelist = ['/login', '/logout'];


    // if (in_array($url, $whitelist)) {
    //     include('include' . $url . '.inc.php');
    // }
    */
    
    // $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    

    // if (array_key_exists($path, $routes)) {
    //     include('static/pages/'.$routes[$path] . '.php');
    // } else {
    //     header("HTTP/1.1 404 Not Found");
    //     echo "404 Not Found";
    // }

?> 


</body>
</html>