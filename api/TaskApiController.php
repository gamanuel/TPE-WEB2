<?php

require_once 'Model/categoriaModel.php';
require_once 'ApiController.php';

class TaskApiController extends ApiController {

    public function __construct(){
        parent::__construct();
        $this->model = new categoriaModel();
    }

    public function getCategories($params = []){
        $categorias = $this->model->getCategories();
        $this->view->response($categorias,200);  

    }


}