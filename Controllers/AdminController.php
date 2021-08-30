<?php

class AdminController extends BaseController {

    public function __construct() {
        $this->loadModel('UserModel');
        $this->loadModel('PostModel');
    }

    public function index() { 
        $userObject=new UserModel;
        $postObject = new PostModel();

        $data_user = $userObject->getAll();
        $data_post = $postObject->getAll();    


        return $this->view('admin/index',['data_user'=>$data_user,'data_post'=>$data_post]); 
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
                // header("Location: index.php?controller=user");
                // return $this->view('admin/User/index');
      
                header("Location: index.php?controller=admin");
                return $this->view('admin/User/index');
            } else {
                $error = 'Wrong username or password!';
                return $this->view('admin/Login/index', ['error'=>$error]);
            }
        } else {
            $error = 'Wrong account or password!';
            return $this->view('admin/Login/index', ['error'=>$error]);
        }
    }


}
