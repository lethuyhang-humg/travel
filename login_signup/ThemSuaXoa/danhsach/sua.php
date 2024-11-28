<?php
    $id = $_GET['id'];

    $sql_tbl_users = "SELECT * FROM tbl_users";
    $query_tbl_users = mysqli_query($connect, $sql_tbl_users);

    $sql_up = "SELECT * FROM favourite_userss where pr_id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if (isset($_POST['sbm'])) {
        $pr_name = $_POST['pr_name'];

        if($_FILES['img']['name']==''){
            $img = $row_up['pr_name'];
        }else{
            $img = $row_up['pr_name'];
        }
        $location = $_POST['location'];
        $img = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $description = $_POST['description'];

        $sql = "UPDATE `favourite_userss` 
                SET `pr_name` = '$pr_name', `location` = '$location', `img` = '$img', `description` = '$description'
                WHERE `pr_id` = '$id'";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card-header">
        <h2>Sửa địa điểm</h2>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên tỉnh</label>
                <input type="text" name="pr_name" class="form-control" required value="<?php echo $row_up['pr_name'];?>">
            </div>

            <div class="form-group">
                <label for="">Tên địa điểm</label>
                <input type="text" name="location" class="form-control" required value="<?php echo $row_up['location'];?>">
            </div>

            <div class="form-group">
                <label for="">Ảnh địa điểm</label>
                <input type="file" name="img" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text" name="description" class="form-control" required value="<?php echo $row_up['description'];?>">
            </div>

            <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
        </form>
    </div>
</div>
