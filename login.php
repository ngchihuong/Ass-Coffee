<?php
include('./connect/connect.php');

    session_start();

    if (isset($_SESSION['mySession'])) {
       header('location: trangchu.php');
    }

    if (isset($_POST['btn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql_login = mysqli_query($conn , "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'");
 
        if (mysqli_num_rows($sql_login) == 1) {
            $_SESSION['mySession'] = $username;
            header('location: trangchu.php');
            
        } else {
            echo "<h3>Tài khoản hoặc mật khẩu không chính xác!</h3>";
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- <link rel="stylesheet" href="/css/trangchu.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Web Bán Xiên Bẩn</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="./thietke//trangchu.css"> -->
    <style>
      <?php
      include('thietke/login.css');
      ?>
    </style>
</head>

<body>
   <div class="container"> 
<form action="./login.php" method="post" enctype="multipart/form-data">

        <div class="row">
            
            <h2>Đăng Nhập</h2>
        
        <p>Tên tài khoản : </p>
        <input type="text" name="username" placeholder="Tên tài khoản">
        <p>Mật khẩu :</p>
        <input type="password" name="password" placeholder="Mật khẩu">
        
        <button type="submit" class="btn btn-primary" name="btn">Đăng nhập</button>
        <button class="btn btn-success"><a href="./dangky.php">Đăng ký</a></button>  
         
        <button class="btn btn-secondary home"><a href="trangchu.php">Về trang chủ</a></button>   
       
        </div>
</form>
 </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>