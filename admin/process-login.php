<?php
    include("config/db.php");

    if(isset($_POST['sbmLogin'])){
        $email=$_POST['txtEmail'];
        $pass=$_POST['txtPass'];

        $sql="SELECT * FROM accountemployee WHERE email='$email' AND password"
    }
?>
