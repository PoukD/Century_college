<?php
    include("config/db.php");
    include("template/header.php");
?>
<div class="container-fluid">
    <div class="form">
        <form class="login_form" method="POST" action="process-login.php"> 
            <input type="text" name="txtEmail"placeholder="Username"> 
            <input type="password" name="txtPass" placeholder="password"> 
            <input type="submit" class=btn-success name="sbmLogin">
        </form>
    </div>
</div>
<?php
    include("template/footer.php");
?>