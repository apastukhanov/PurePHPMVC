<?php


namespace App\Controllers;

use Model\Car;

// include 'include/func.inc.php';

class Controller {

    public function __construct() {

    }

    public function getHome() {
        $cars = Car::all();
        view("home.php", ["cars" => $cars]);
    }

    public function getContacts() {
        view("contacts.php", []);
    }

    public function getCar() {
        $id = $_REQUEST['id'];
        $car = Car::get($id);
        view("car.php", ['car' => $car, 'id' => $id]);
    }

    public function getTable() {
        $cars = Car::all();
        view("table.php", ['cars' => $cars]);
    }

    public function logout() {
        view("logout.php", []);
    }

    public function login() {
        $cars = Car::all();
        view("login.php", []);
    }
}