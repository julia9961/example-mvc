<?php

class Router
{
    private $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }

    public function run()
    {
        switch ($_POST['button']) {

            case null:
                $data = null;
                $this->controller->showView("ContentView", $data);
                break;

            case "добавить":
                $this->controller->saveToCsv();
                break;

            case "показать товары":
                $this->controller->getCsv();
                break;

            case "sort":
                $this->controller->sortArray();
                break;
        }
    }
}


?>