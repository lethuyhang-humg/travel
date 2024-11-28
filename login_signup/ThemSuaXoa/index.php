<?php
    require_once 'db/connect.php' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Yêu Thích</title>
</head>
<body>
    
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'danhsach':
                    require_once 'danhsach/danhsach.php';
                    break;

                case 'them':
                    require_once 'danhsach/them.php';
                    break;

                case 'sua':
                    require_once 'danhsach/sua.php';
                    break;

                case 'xoa':
                    require_once 'danhsach/xoa.php';
                    break;

                default:
                    require_once 'danhsach/danhsach.php';
            }
        }else{
            require_once 'danhsach/danhsach.php';
        }
    ?>
</body>
</html>