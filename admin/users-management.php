<?php
    include("config/db.php");
    include("template/header.php");
?>
    <div id="main-main" class="container-fluid">
        <main>
            <h2>Users Management</h2>
            <div>
                <a href="http://localhost/BTL/admin/addUser.php" class="btn btn-success">Add New User</a>
            </div>
            <div class="row main-content">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Change Password</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</tsh>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //Lặp lấy dữ liệu và hiển thị ra bảng
                        //Bước 02: Thực hiện Truy vấn
                        $sql = "SELECT * FROM accountEmployee";
                        $result = mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            $i=1;
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td> <?php echo $row['full_name']; ?> </td>
                                    <td> <?php echo $row['user_name']; ?></td>
                                    <td><a href="changePassword.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-fill"></i></a></td>
                                    <td><a href="editUser.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="deleteUser.php?id=<?php echo $row['id']; ?>"><i class="bi bi-archive-fill"></i></a></td>
                                </tr>
                    <?php
                            $i++;
                            }
                        }

                        
                    ?>
                    
                    
                </tbody>
                </table>

            </div>
        </main>
    </div>
    <?php
    include("template/footer.php");
?>
   
