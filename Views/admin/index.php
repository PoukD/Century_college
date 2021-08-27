<?php include './Views/admin/layouts/header.php'; ?>
<?php if(isset($_SESSION['pleaseLogin'])) { ?>  
        <a href="?controller=admin&action=get_login" class="btn btn-primary" style="margin:129px 0px 200px 300px"><h1>Please Login Before Enter Admin Side</h1></a>
<?php } ?>
<div class="container">
   
</div>

<?php include './Views/admin/layouts/footer.php'; ?>