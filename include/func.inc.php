<?php

function compose_menu($name) {
    $output = '==========<br/>' . $name . '<br/>==========';
    return $output;
} 

function get_user() {
    $user = Null;
    if(isset($_POST["user-name"]) && $_POST["user-name"] !== ''){
        $user = $_POST["user-name"];
        $cookie_name = "user-name";
        setcookie($cookie_name, $user, time() + (86400 * 30));
    } else {
        $user = isset($_COOKIE["user-name"]) ? $_COOKIE["user-name"] : 'Guest';
    }
    return $user;
}

function view(string $template, Array $data = []) {
    extract($data);
    ob_start();
    include 'resources/pages/'. $template;
    ob_end_flush();
}

?>