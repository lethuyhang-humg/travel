<?php
session_start ();
ob_start ();
require 'db/connect.php';
debug_to_console("vào đây");

if(isset($_POST['dangnhap'])){
    debug_to_console("xuống đây");  
    $email = $_POST['email'];
    $password = $_POST['password'];
    debug_to_console($_POST['email']);
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = ?");
    $stmt->bind_param("s", $email); 
    $stmt->execute();
    $result = $stmt-> get_result();
    debug_to_console($result -> num_rows);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['username'] = $row['username'];
            header('Location: ../TrangChu/mwlg.html');
        } else {
            header('Location: login.php?warning_msg=error_password');
        }
    } else {
        header('Location: login.php?warning_msg=account_notfound');
    }
}


function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

?>