<?php
require 'db/connect.php';
if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    
    if(!empty($username)&&!empty($email)&&!empty($password)&&!empty($day)&&!empty($month)&&!empty($year)
    &&!empty($gender)){
        echo '<pre>';
        print_r($_POST);

        $sql = "INSERT INTO `tbl_users` 
        (`username`, `email`, `password`, `gender`, `day`, `month`, `year`) 
        VALUES 
        ('$username', '$email', '$password', '$gender', '$day', '$month', '$year')";

         if($conn->query($sql)===TRUE){
            echo "Luu du lieu thanh cong";
         }else{
            echo "Loi {$sql}" .$conn->error;
         }

    }else{
        echo 'Ban can nhap day du thong tin truoc khi dang ky';
    };
}
?>