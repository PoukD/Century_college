
<?php include './Views/admin/layouts/header.php'; ?>

<div class="container">
    <h3>ADD NEW POST</h3>
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
    
    <form action="?controller=post&action=post_add" method="post">
        <div class="mb-3">
            <label for="category_id" class="form-label">Category Id</label>
            <input type="text" class="form-control" id="name" name="category_id" placeholder="Enter Category Id : 1 = Campus, 2 = Student, 3 = News">
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <input type="text" class="form-control" id="username" name="day" placeholder="Enter Day...">
        </div>
        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <input type="text" class="form-control" id="password" name="month" placeholder="Enter Month...">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="password" name="title" placeholder="Enter Title...">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="password" name="description" placeholder="Enter Description...">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>

<?php include './Views/admin/layouts/footer.php'; ?>