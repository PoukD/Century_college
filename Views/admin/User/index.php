<?php include './Views/admin/layouts/header.php'; ?>
<?php if(isset($_SESSION['pleaseLogin'])) { ?>  
        <a href="?controller=admin&action=get_login" class="btn btn-primary" style="margin:129px 0px 200px 300px"><h1>Please Login Before Enter Admin Side</h1></a>
<?php } ?>
<div class="container">

    <h3>USER LIST</h3>
    <hr>
    <a href="index.php?controller=user&action=get_add"class="btn btn-primary">Add New User</a>
    
    <?php if(isset($success)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $success; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Method</th>
        </tr>
        </thead>
        <tbody>
            <?php if(isset($userList)) { ?>
                <?php $i = 1;
                foreach($userList as $item) { ?>
                    <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['username']; ?></td>
                    <td>
                        <a href="?controller=user&action=get_edit&id=<?php echo $item['id']; ?>"id="btnMethod" class="btn btn-primary btn-sm">Edit</a>
                        <a href="?controller=user&action=get_delete&id=<?php echo $item['id']; ?>" id="btnMethod"class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    </tr>
                <?php } }?>
        </tbody>
    </table>
</div>

<div id="footer-footer" class="container-fluid" style="position:fixed;left:0;right:0;bottom:0">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <div class="col-md-12 text-center">
                <a href="#" class="text-decoration-none text-white">Deverlop By Khounpasird & Pham Thu Ha</a>
            </div>

        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>