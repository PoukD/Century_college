<?php include './Views/admin/layouts/header.php'; ?>

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
            <?php if(isset($data)) { ?>
                <?php $i = 1;
                foreach($data as $item) { ?>
                    <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['username']; ?></td>
                    <td>
                        <a href="?controller=user&action=get_edit&id=<?php echo $item['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="?controller=user&action=get_delete&id=<?php echo $item['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include './Views/admin/layouts/footer.php'; ?>