
<?php

    include '../../../config/config.php';    
    session_start();

    $isAdmin = $_SESSION["user"];

    if(!$isAdmin){
        header("location:../login/login.php");
    }

    $sql = "SELECT `isAdmin` FROM `quanlytruonghoc`.`user` WHERE `username` = '$isAdmin'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Trang main</title>
</head>
<body>
    <div class="header">
        <div class="bao-logo">
            <img class="logo" src="../../image/logo.png" alt="">
        </div>
        <div class="user">
            <p><?php echo $_SESSION["user"] ?></p>
        </div>
        <div class="out">
            <a href="log_out.php">Đăng xuất</a>
            
        </div>
    </div>
    <!-- <div class="banner">
        <img src="../../image/img.jpg" alt="">
    </div> -->
    <div class="container">
        <div class="content">
            <div class="col">
                <a href="Isadmin/list.php" class="content-p"<?php if($row['isAdmin'] = '0'){echo 'style="visibility:hidden;"';} ?> >
                    <p>USER</p>
                </a>

            </div>
            <div class="col">
                <a href="Khoa/khoa.php" class="content-p">
                    <p>KHOA</p>
                </a>
            </div>
            <div class="col">
                <a href="Bomon/bomon.php" class="content-p">
                    <p>BỘ MÔN</p>
                </a>

            </div>
            <div class="col">
                <a href="Lop/lop.php" class="content-p">
                    <p>LỚP</p>
                </a>

            </div>
            <div class="col">
                <a href="" class="content-p">
                    <p>GIẢNG VIÊN</p>
                </a>

            </div>
            <div class="col">
                <a href="Sinhvien/sinhvien.php" class="content-p">
                    <p>SINH VIÊN</p>
                </a>

            </div>
            <div class="col">
                <a href="Monhoc/monhoc.php" class="content-p">
                    <p>MÔN HỌC</p>
                </a>

            </div>
            <div class="col">
                <a href="diemthi/diemthi.php" class="content-p">
                    <p>ĐIỂM</p>
                </a>
            </div>

        </div>
    </div>

</body>
</html>
