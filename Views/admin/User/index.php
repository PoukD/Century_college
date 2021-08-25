<?php include './Views/admin/layouts/header.php'; ?>

<div class="container">
    <h3>DANH SÁCH TÀI KHOẢN</h3>
    <hr>
    <a href="index.php?controller=user&action=add_new_user"class="btn btn-primary">Thêm mới tài khoản</a>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên</th>
        <th scope="col">Tài khoản</th>
        <th scope="col">Chức năng</th>
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
                        <a href="#" class="btn btn-primary btn-sm">Sửa</a>
                        <a href="#" class="btn btn-danger btn-sm">Xoá</a>
                    </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include './Views/admin/layouts/footer.php'; ?>