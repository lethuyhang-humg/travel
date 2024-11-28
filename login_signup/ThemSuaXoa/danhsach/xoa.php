<?php 
    $id = $_GET['id'];
    $sql = "DELETE FROM favourite_userss where pr_id = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=danhsach')
?>