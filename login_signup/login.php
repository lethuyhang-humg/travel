<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <!-- font roboto -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- from login -->
    <div class="login">
      <div class="login__container">
        <h1>Đăng Nhập</h1>
        <form action="con_log.php" method="POST">
          <h5>Email</h5>
          <input type="text" class="input-login-username" name="email"/>
          <h5>Password</h5>
          <input type="password" class="input-login-password" name="password" />
          <button type="submit" name="dangnhap" class="login__signInButton" >Đăng Nhập</button>
        </form>
        <a href="sign_up.php" class="login__registerButton" 
          >Tạo tài khoản mới</a>
          <?php if (isset($_GET['warning_msg'])): ?>
        <div class="warning-msg">
              <?php
              $warning_msg = $_GET['warning_msg'];
              if ($warning_msg == 'error_password') {
                  echo "Mật khẩu không chính xác. Vui lòng nhập lại!";
              } else {
                  echo "Tài khoản không tồn tại. Vui lòng kiểm tra lại thông tin!";
              }
              ?>
          </div>
      <?php endif; ?> 
      </div>
    </div>
  </body>
</html>