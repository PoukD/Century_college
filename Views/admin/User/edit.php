<?php include './Views/admin/layouts/header.php'; ?>

<div class="container">
    <h3>EDIT USER</h3>
    <hr>
    <?php if(isset($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo $error; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <?php if(isset($success)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $success; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    
    <form action="?controller=user&action=post_edit&id=<?php echo $data['id']; ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Full name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name..." value="<?php echo $data['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username..." value="<?php echo $data['username']; ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password..." value="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>

<?php include './Views/admin/layouts/footer.php'; ?>