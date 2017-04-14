<?php

class Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function showView($nameView, $data)
    {
        require_once "views/HeaderView.php";
        require_once "views/{$nameView}.php";
    }

    public function saveToCsv()
    {
        $this->model->saveToCsv();
        $data = null;
        $this->showView("ContentView", $data);
    }

    public function getCsv()
    {
        $data = $this->model->getCsv();
        $this->showView("OutputView", $data);
    }

    public function sortArray()
    {
        $array = $this->model->getCsv();
        $data = $this->model->sortArray($array);
        $this->showView("OutputView", $data);
    }
}


?>