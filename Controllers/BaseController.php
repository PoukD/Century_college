<?php

class BaseController {

    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';

    // - Lấy view từ thư mục Views

    protected function view($viewPath, array $data = []) {
        
        foreach ($data as $key => $value) {
            $$key = $value;
        }

        return require (self::VIEW_FOLDER_NAME . '/' . $viewPath . '.php');
    }

    protected function loadModel($modelPath) {
        return require (self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php');
    }

}

