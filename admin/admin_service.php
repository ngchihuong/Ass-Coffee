<?php 
include('../connect/connect.php');
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        <?php
        include('../thietke/show_product.css')
        ?>
    </style>
</head>

<body>
  <main>
    <div class="container">
        <h2>Trang Quản Trị Viên</h2>
        <ul>
            <li>
                 <a href="../add_product.php" style="text-decoration: none;">
                <button class="btn btn-outline-primary text-dark">Thêm sản phẩm </button>
                </a> 
            </li>
            <br>
            <li>
              <a href="./show_product.php">
                    <button class="btn btn-outline-primary text-dark">Sửa hoặc xóa sản phẩm</button>
                </a>  
            </li>
            <br>
            <li>
              <a href="./show_accounts.php">
                    <button class="btn btn-outline-primary text-dark">Sửa hoặc xóa tài khoản</button>
                </a>  
            </li>
        </ul>
    </div>
  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>