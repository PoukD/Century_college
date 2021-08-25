<?php

class UserController extends BaseController {

    public function __construct() {
        $this->loadModel('UserModel');
    }

    
    public function index() {  
        $user = new UserModel();
        $data = $user->getAll();

        return $this->view('admin/User/index', ['data'=>$data]);
    }

}