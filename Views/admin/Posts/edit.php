<?php if(!isset($_SESSION['user'])) {
    $error = 'Please Login Befor Enter Admin Page';
    return $this->view('admin/Login/index', ['error'=>$error]);
 }?>
<?php include './Views/admin/layouts/header.php'; ?>

<div class="container">
    <h3>EDIT POST</h3>
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
    
    <form action="?controller=post&action=post_edit&id=<?php echo $data['id']; ?>" method="post">
        <div class="mb-3">
            <label for="category_id" class="form-label">Category Id</label>
            <input type="text" class="form-control" id="name" name="category_id" placeholder="Enter Category Id : 1 = Campus, 2 = Student, 3 = News">
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <input type="text" class="form-control" id="username" name="day"value="<?php echo $data['day']; ?>"placeholder="Enter Day...">
        </div>
        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <input type="text" class="form-control" id="password" name="month"value="<?php echo $data['month']; ?> "placeholder="Enter Month...">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="password" name="title"value="<?php echo $data['title']; ?>"placeholder="Enter Title...">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="password" name="description" value="<?php echo $data['description']; ?>" placeholder="Enter Description...">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>

<?php include './Views/admin/layouts/footer.php'; ?>