<?php 
include('../connect/connect.php');
$productsPerPage = 12;

// Trang hiện tại, mặc định là trang 1
$current_page = 1;

// Nếu trang được chỉ định trong URL, thay đổi giá trị của $current_page
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $current_page = $_GET['page'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Web Bán Xiên Bẩn</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    <?php
    include('../thietke/show_product.css');
    ?>
  </style>
</head>

<body>
    <div class="admin justify-content-center">
    <a href="./admin_service.php">
    <button class="btn btn-outline-success text-dark"><h6>Trở về trang Quản trị viên</h6></button>   
    </a>
    </div>

   <main> 
    <section class="specialty-coffees menu" id="menu">
      <div class="heading2"><span>Danh sách</span> Sản phẩm</div>
      <div class="container">
        <div class="row">
          <!-- start list sp1 -->
          <?php
$offset = ($current_page - 1) * $productsPerPage;

$sql_cf1 = mysqli_query($conn, "SELECT * FROM products WHERE category_name LIKE '%Caphe%' AND status = '1' ORDER BY product_id DESC LIMIT $offset, $productsPerPage");
while ($row_cf1 = mysqli_fetch_array($sql_cf1)) {

?>
            <div class="col-md-3 py-3 py-md-0">
              <div class="card py-3 py-md-0">
                <img class="card-img-top" src="../img/<?php echo $row_cf1['image'] ?>" alt="" style="border-radius:10px;border:1px solid black;">
                <div class="card-body" style="border:1px solid black; border-radius:10px;">
                
                    <a href="../edit_product.php?this_id=<?php echo $row_cf1['product_id'] ?>" style="text-decoration: none;">
                    <button class="btn btn-outline-primary text-dark">Sửa</button>
                    </a>  &nbsp;
                     <a href="../delete_product.php?this_id=<?php echo $row_cf1['product_id'] ?>">
                    <button class="btn btn-outline-warning text-dark"> Xóa</button>
                    </a>
                    
                  <h3 class="card-title" style="color: black;"><?php echo $row_cf1['product_name'] ?></h3>
                  <p class="card-text" style="text-align:center;"><?php echo number_format($row_cf1['sale_price']) . 'đ' ?> <strike><?php echo number_format($row_cf1['price']) . 'đ' ?></strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
                </div>
              </div>
              <div class="w-100" style="height: 30px;"></div>
            </div>
          <?php
          }
          ?>
          <!-- end list sp1 -->
        </div>
      </div>

      <div class="pagination">
    <?php
    // Tính tổng số sản phẩm
    $total_products = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM products WHERE category_name LIKE '%Caphe%' AND status = '1'"));

    // Tính tổng số trang
    $total_pages = ceil($total_products / $productsPerPage);

    // Hiển thị nút "Trang trước"
    if ($current_page > 1) {
        echo '<a href="?page=' . ($current_page - 1) . '">Trang trước</a>';
    }

    // Hiển thị các trang
    for ($i = 1; $i <= $total_pages; $i++) {
        echo '<a href="?page=' . $i . '"';

        if ($i == $current_page) {
            echo ' class="active"';
        }

        echo '>' . $i . '</a>';
    }

    // Hiển thị nút "Trang sau"
    if ($current_page < $total_pages) {
        echo '<a href="?page=' . ($current_page + 1) . '" class="next">>></a>';
    }
    ?>
</div>


      
    </section>
  </main>

  </body>

</html>