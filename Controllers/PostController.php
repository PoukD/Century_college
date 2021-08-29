<?php

class PostController extends BaseController {

    public function __construct() {
        $this->loadModel('PostModel');
    }

    
    public function index() {  
        $post = new PostModel();
        $data = $post->getAll();

        return $this->view('admin/Posts/index', ['postsList'=>$data]);
    }

    public function get_add() {  
        return $this->view('admin/Posts/add');
    }

    public function post_add() {  
        $postsObject = new PostModel();

        $category_id = $_POST['category_id'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        if (!$category_id || !$day || !$month || !$title || !$description) {
            $error = 'Please enter enough information!';
            return $this->view('admin/Posts/add', ['error' => $error]);
        }

        $data = [
            'category_id' => $category_id,
            'day' => $day,
            'month' => $month,
            'title' => $title,
            'description' => $description
        ];

        $postsObject->store($data);

        $success = 'Success!';
        return $this->view('admin/Posts/add', ['success' => $success]);
    }

    public function get_edit() {  
        $id = $_REQUEST['id'];

        $postsObject = new PostModel();
        $data = $postsObject->findById($id);

        return $this->view('admin/Posts/edit', ['data'=>$data]);
    }

    public function post_edit() {  
        $postsObject = new PostModel();

        $id = $_REQUEST['id'];
        
        $category_id = $_POST['category_id'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        if (!$category_id || !$day || !$month || !$title || !$description) {
            $data = $postsObject->findById($id);
            $error = 'Please enter enough information!';
            return $this->view('admin/Posts/edit', ['error' => $error, 'data'=>$data]);
        }

        $dataUpdate = [
            'category_id' => $category_id,
            'day' => $day,
            'month' => $month,
            'title' => $title,
            'description' => $description
        ];

        $postsObject->updateData($id, $dataUpdate);

        $data = $postsObject->findById($id);

        $success = 'Success!';
        return $this->view('admin/Posts/edit', ['success' => $success, 'data'=>$data]);
    }

    public function get_delete() { 
        $id = $_REQUEST['id'];

        $postsObject = new PostModel();
        $postsObject->destroy($id);

        $data = $postsObject->getAll();
        return $this->view('admin/Posts/index', ['success'=>'Deleted!', 'postsList'=>$data]);
    }

}