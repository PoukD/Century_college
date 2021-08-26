<?php

class HomeController extends BaseController {

    public function __construct() {
        $this->loadModel('PostModel');
    }
    
    public function index() {
        $postObject = new PostModel();
        $dataCampus = $postObject->where('category_id', '=', 1);

        return $this->view('pages/index', ['campus'=>$dataCampus]);
    }

}
