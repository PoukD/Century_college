<?php if(!isset($_SESSION['user'])) {
    $error = 'Please Login Befor Enter Admin Page';
    return $this->view('admin/Login/index', ['error'=>$error]);
 }?>
<?php include './Views/admin/layouts/header.php'; ?>
<div class="container">
   
</div>

<?php include './Views/admin/layouts/footer.php'; ?>