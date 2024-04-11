<?php


namespace App\Views;


class Component {

    private $name = null;
    private $data = [];


    private function __construct($name, $data) {
        $this->name= $name;
        $this->data = $data;
    }


    public static function create($name, $data) {
        return new self($name, $data);
    }


    public function load() {
        ob_start();
        include('resources/components/' .$this->name .'.inc.php');
        $html = ob_get_clean();
        return $html;
    }

    public function render() {
        echo $this->load();
    }


}