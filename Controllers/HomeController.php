<?php

class HomeController extends BaseController {

    public function __construct() {
        $this->loadModel('PostModel');
    }
    
    public function index() {
        $postObject = new PostModel();

        $dataCampus = $postObject->where('category_id', '=', 1);
        $dataStudent = $postObject->where('category_id', '=', 2);
        $dataNews = $postObject->where('category_id', '=', 3);       

        return $this->view('pages/index', ['campus'=>$dataCampus,'student'=>$dataStudent,'news'=>$dataNews]);
    }

}
