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
                        <a href="?controller=user&action=get_edit&id=<?php echo $item['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="?controller=user&action=get_delete&id=<?php echo $item['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    </tr>
                <?php } }?>
        </tbody>
    </table>
</div>

<?php include './Views/admin/layouts/footer.php'; ?>