<?php if(!isset($_SESSION['user'])) {
    $error = 'Please Login Befor Enter Admin Page';
    return $this->view('admin/Login/index', ['error'=>$error]);
 }?>
<?php include './Views/admin/layouts/header.php'; ?>
<div class="container">

    <h3>Total</h3>
    <hr>
    
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name Table</th>
        <th scope="col">All Information</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> 1 </th>
                <td>User Account</td>
                    <?php if(isset($data_user)) { 
                            $i = 0;
                        foreach($data_user as $item) {$i++;} ?>
                <td>
                        <?php echo $i ?>
                </td>
                    <?php  }?>
            </tr>
            <tr>
                <th scope="row"> 2 </th>
                <td>Post</td>
                    <?php if(isset($data_post)) { 
                            $i = 0;
                        foreach($data_post as $item) {$i++;} ?>
                <td>
                        <?php echo $i ?>
                </td>
                    <?php  }?>
            </tr>
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