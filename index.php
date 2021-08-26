<?php
    session_start();
    
    require './config/Database.php';
    require './Models/BaseModel.php';
    require './Controllers/BaseController.php';

    //Lấy tên controller từ url
    $controllerName = ucfirst((strtolower($_REQUEST['controller'] ?? 'Home')).'Controller');

    $actionName = $_REQUEST['action'] ?? 'index';

    require "./Controllers/${controllerName}.php";

    $controllerObject = new $controllerName;
    $controllerObject->$actionName();
