<?php 

    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'app/Views/Component.php';
    include 'app/Models/Car.php';
    include 'app/Http/Routes/Route.php';
    include 'app/Http/Dispatchers/Dispatcher.php';
    include 'routes/web.php';
    include 'include/func.inc.php';
    include 'app/Http/Controllers/Controller.php';

    use App\Dispatchers\Dispatcher;

    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    $dispatcher = new Dispatcher($requestMethod, $requestUri);
    $dispatcher->dispatch();

?>