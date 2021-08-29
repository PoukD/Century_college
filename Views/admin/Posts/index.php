<?php include './Views/admin/layouts/header.php'; ?>
<?php if(isset($_SESSION['pleaseLogin'])) { ?>  
        <a href="?controller=admin&action=get_login" class="btn btn-primary" style="margin:129px 0px 200px 300px"><h1>Please Login Before Enter Admin Side</h1></a>
<?php } ?>
<div class="container">

    <h3>Posts List</h3>
    <hr>
    <a href="index.php?controller=post&action=get_add"class="btn btn-primary">Add New Post</a>
    
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
        <th scope="col">Day</th>
        <th scope="col">Month</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Method</th>
        </tr>
        </thead>
        <tbody>
            <?php if(isset($postsList)) { ?>
                <?php $i = 1;
                foreach($postsList as $item) { ?>
                    <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $item['day']; ?></td>
                    <td><?php echo $item['month']; ?></td>
                    <td><?php echo $item['title']; ?></td>
                    <td><?php echo $item['description']; ?></td>
                    <td>
                        <a href="?controller=post&action=get_edit&id=<?php echo $item['id']; ?>" class="btn btn-primary btn-sm" id="btnMethod">Edit</a>
                        <a href="?controller=post&action=get_delete&id=<?php echo $item['id']; ?>" class="btn btn-danger btn-sm"  id="btnMethod">Delete</a>
                    </td>
                    </tr>
                <?php } }?>
        </tbody>
    </table>
</div>

<?php include './Views/admin/layouts/footer.php'; ?>