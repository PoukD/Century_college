<?php

class AdminController extends BaseController {

    public function __construct() {
        $this->loadModel('UserModel');
    }

    
    public function index() {
        $user = new UserModel;
        $data = $user->getAll();
        
        return $this->view('admin/User/index', ['data'=>$data]);
    }

    public function get_login() {
        $data = [1,2,3,4,5];
        return $this->view('admin/Login/index', ['data'=>$data]);
    }

    public function delete_user() {
        $user = new UserModel;
        $id = $_GET['id'];
        $user->destroy($id);
    }

}