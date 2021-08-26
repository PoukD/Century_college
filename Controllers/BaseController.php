<?php

class BaseController {

    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';

    // - Lấy view từ thư mục Views
    //$viewPath: Đường dẫn file view
    //$data = dữ liệu truyền sang view
    protected function view($viewPath, array $data = []) {
        
        //Lấy giá trị dữ liệu truyền từ controller sang view
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        return require (self::VIEW_FOLDER_NAME . '/' . $viewPath . '.php');
    }

    //Load model từ thư mục
    protected function loadModel($modelPath) {
        return require (self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php');
    }

}

