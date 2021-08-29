<?php

class PostController extends BaseController {

    public function __construct() {
        $this->loadModel('PostModel');
    }

    
    public function index() {  
        $post = new PostModel();
        $data = $post->getAll();

        return $this->view('admin/User/index', ['userList'=>$data]);
    }

    public function get_add() {  
        return $this->view('admin/User/add');
    }

    public function post_add() {  
        $userObject = new UserModel();

        $name     = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!$name || !$username || !$password) {
            $error = 'Please enter enough information!';
            return $this->view('admin/User/add', ['error' => $error]);
        }

        $data = [
            'name' => $name,
            'username' => $username,
            'password' => md5($password)
        ];

        $userObject->store($data);

        $success = 'Success!';
        return $this->view('admin/User/add', ['success' => $success]);
    }

    public function get_edit() {  
        $id = $_REQUEST['id'];

        $userObject = new UserModel();
        $data = $userObject->findById($id);

        return $this->view('admin/User/edit', ['data'=>$data]);
    }

    public function post_edit() {  
        $userObject = new UserModel();

        $id = $_REQUEST['id'];
        
        $name     = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!$name || !$username ) {
            $data = $userObject->findById($id);
            $error = 'Please enter enough information!';
            return $this->view('admin/User/edit', ['error' => $error, 'data'=>$data]);
        }

        $dataUpdate = [
            'name' => $name,
            'username' => $username,
            'password' => md5($password)
        ];

        $userObject->updateData($id, $dataUpdate);

        $data = $userObject->findById($id);

        $success = 'Success!';
        return $this->view('admin/User/edit', ['success' => $success, 'data'=>$data]);
    }

    public function get_delete() { 
        $id = $_REQUEST['id'];

        $userObject = new UserModel();
        $userObject->destroy($id);

        $data = $userObject->getAll();
        return $this->view('admin/User/index', ['success'=>'Deleted!', 'userList'=>$data]);
    }

}