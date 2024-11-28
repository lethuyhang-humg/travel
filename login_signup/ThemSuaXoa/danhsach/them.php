<?php
    $sql_tbl_users = "SELECT * FROM tbl_users";
    $query_tbl_users = mysqli_query($connect, $sql_tbl_users);

    if (isset($_POST['sbm'])) {
        $pr_name = $_POST['pr_name'];
        $location = $_POST['location'];
        $img = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `favourite_userss` (`pr_name`, `location`, `img`, `description`) 
        VALUES 
        ('$pr_name','$location','$img','$description')";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($img_tmp, 'img/'.$img);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card-header">
        <h2>Thêm địa điểm</h2>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên tỉnh</label>
                <input type="text" name="pr_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Tên địa điểm</label>
                <input type="text" name="location" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Ảnh địa điểm</label>
                <input type="file" name="img" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text" name="description" class="form-control">
            </div>

            <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
        </form>
    </div>
</div>
