<?php

require_once 'TaskView.php';

class ApiController {

    protected $view;
    protected $model;

    public function __construct(){
        $this->view = new ApiView();
        $this->raw_data  = file_get_contents('php://input');
    }

    protected function getData(){
        return json_encode($this->raw_data);
    }
}