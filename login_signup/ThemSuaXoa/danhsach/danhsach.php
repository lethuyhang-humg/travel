<?php
    require_once '../db/connect.php';

    $sql = "SELECT * FROM favourite_userss";
    $query = mysqli_query($connect, $sql);
?>

<nav>
        <div class="nav__bar">
          <!-- Logo -->
          <div class="logo nav__logo">
            <a href="#">MNTN</a>
          </div>
          
          <!-- Liên kết -->
          <ul class="nav__links" id="nav-links">
            <li><a href="#about">Us</a></li>
            <li>
              <div class="menu">
                <div class="menu-item" id="menuItem"><a>Địa điểm</a></div>
                <div class="dropdown" id="dropdownMenu">
                  <a href="../HN/HaNoi.html">Hà Nội</a>
                  <a href="../HaiPhong/haiphong.html">Hải Phòng</a>
                  <a href="../DienBien/dienbien.html">Điện Biên</a>
                  <a href="../QuangNinh/QuangNinh.html">Quảng Ninh</a>
                  <a href="../NinhBinh/NinhBinh.html">Ninh Bình</a>
                </div>
              </div>
            </li>
            <li><a href="../login_signup/ThemSuaXoa/index.php">Yêu thích</a></li>
          </ul>
      
          <h2 style="font-size: 1.5rem;
          font-weight: 600;
          font-family: var(--header-font);
          color: var(--white);
          padding: 20px;">Welcome!</h2>
          </div>
        </div>
      </nav>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách yêu thích</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên tỉnh</th>
                        <th>Địa điểm</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th>Xóa</th>
                        <th>Sửa</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['pr_name']; ?></td>
                                <td><?php echo $row['location']; ?></td>

                                <td>
                                    <img style="width:100px;" src="img/<?php echo $row['img']; ?>">
                                </td>

                                <td><?php echo $row['description']; ?></td>
                                <th>
                                    <a href="index.php?page_layout=sua&id=<?php echo $row['pr_id'];?>">Sửa</a>
                                </th>
                                <th>
                                    <a onclick="return Del('<?php echo $row['pr_name'];?>')" href="index.php?page_layout=xoa&id=<?php echo $row['pr_id'];?>">Xóa</a>
                                </th>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="btn">
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc muốn xóa địa điểm này: "+name + "?")
    }
</script>