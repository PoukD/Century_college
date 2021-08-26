<?php

class AdminController extends BaseController {

    public function __construct() {
        $this->loadModel('UserModel');
        $this->loadModel('CategoryModel');
        $this->loadModel('PostModel');
    }

    public function index() { 
        return $this->view('admin/index');
    }

    public function logout() {
        unset($_SESSION['user']);
        return $this->view('admin/Login/index');
    }

    public function get_login() {
        return $this->view('admin/Login/index');
    }

    public function post_login() {
        $userObject = new UserModel;

        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $user = $userObject->where('username', '=', $username, 1);
        
        if ($user) {
            if ($user['password'] == $password) {
                $_SESSION['user'] = $user;
                
                header("Location: index.php?controller=admin");
                //return $this->view('admin/User/index');
            } else {
                $error = 'Sai tài khoản hoặc mật khẩu!';
                return $this->view('admin/Login/index', ['error'=>$error]);
            }
        } else {
            $error = 'Sai tài khoản hoặc mật khẩu!';
            return $this->view('admin/Login/index', ['error'=>$error]);
        }
    }


}
