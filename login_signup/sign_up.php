<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- form signup -->
    <div class="signup">
      <div class="signup__container">
        <h1>Đăng Ký</h1>
        <form action="reg.php" method="POST">
            <h5>Username</h5>
            <input type="text" class="input-signup-username" name="username"/>
            <h5>Email</h5>
            <input type="text" class="input-signup-username" name="email"/>
            <h5>Password</h5>
            <input type="password" class="input-signup-password" name="password"/>
            <h5>Gender</h5>
            <select name="gender" class="input-gender" >
                <option value="">Chọn một mục</option>
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
            <h5>Birth</h5>
            <div class="birth-container">
                 <select name="day" id="day" class="birth day">
                <?php
                    for ($i = 1; $i <= 31; $i++) {
                         echo "<option value='$i'>$i</option>";
                        }
                     ?>
                </select>
            <select name="month" id="month" class="birth month">
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                         echo "<option value='$i'>Tháng $i</option>";
                        }
                     ?>
                 </select>
            <input type="text" name="year" placeholder="Năm" class="birth year">
            </div>
            <button type="submit" class="signup__signInButton" name="btn" value="signup">Đăng Ký</button>
        </form>
        <a href="login.php" class="signup__registerButton"
          >Tạo tài khoản mới</a
        >
      </div>
    </div>
  </body>
</html>