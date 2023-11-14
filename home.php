<?php
include("./connect/connect.php");
?>
<div class="container-fluids">
  <div class="w-100" style="height: 30px; background-color: #FBF8F1;"></div>
  <section class="specialty-coffees">
    <div class="heading2"><span>Các Loại</span> Cà Phê</div>
    <div class="container">
      <div class="row">
        <!-- start list sp1 -->
        <?php
        $sql_cf1 = mysqli_query($conn, "SELECT * FROM products WHERE product_id >= 6 AND product_id <= 13 AND status = '1' ORDER BY product_id DESC");
        while ($row_cf1 = mysqli_fetch_array($sql_cf1)) {
        ?>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card py-3 py-md-0">
            <a href="./product_detail.php?product_id=<?php echo $row_cf1['product_id'] ?>" style="text-decoration: none;">
              <img class="card-img-top" src="./img/<?php echo $row_cf1['image'] ?>" alt="" style="border-radius:10px;border:1px solid black">
            </a>  
              <div class="card-body" style="border:1px solid black; border-radius:10px">
              <a href="./product_detail.php?product_id=<?php echo $row_cf1['product_id'] ?>" style="text-decoration: none;">
                <h3 class="card-title" style="color: black;"><?php echo $row_cf1['product_name'] ?></h3>
              </a>
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
    
    <div class="container specialty-coffees">
        <div class="heading2" style="margin-bottom: 30px;"><span>Tranh</span> Cà phê</div>
        <div class="row">
        <!-- start list sp1 -->
        <?php
        $sql_cf1 = mysqli_query($conn, "SELECT * FROM products WHERE product_id >= 6 AND product_id <= 13 AND status = '1' ORDER BY product_id DESC");
        while ($row_cf1 = mysqli_fetch_array($sql_cf1)) {
        ?>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card py-3 py-md-0">
              <a href="./product_detail.php?product_id=<?php echo $row_cf1['product_id'] ?>" style="text-decoration: none;">
                 <img class="card-img-top" src="./img/<?php echo $row_cf1['image'] ?>" alt="" style="border-radius:10px;border:1px solid black">
              </a>
              <a href="./product_detail.php?product_id=<?php echo $row_cf1['product_id'] ?>" style="text-decoration: none;">
              <div class="card-body" style="border:1px solid black; border-radius:10px">
                <h3 class="card-title" style="color: black;"><?php echo $row_cf1['product_name'] ?></h3>
              </a>
                <p class="card-text" style="text-align:center;"><?php echo number_format($row_cf1['sale_price']) . 'đ' ?> <strike><?php echo number_format($row_cf1['price']) . 'đ' ?></strike> <span><i class="fa-solid fa-cart-shopping"></i></span></p>
              </div>
              
            </div>
            <div class="w-100" style="height: 30px;"></div>
          </div>
        <?php
        }
        ?>
         <div class="container">
    <div class="row">
      <div class="col-5"></div>
      <div class="col-2">
        <div class="timhieu">
      <a href="./danhmuc.php" class="timhieuthem"><h4>Tìm hiểu thêm</h4></a>
    </div>
      </div>
      <div class="col-5"></div>
    </div>
  </div>
        <!-- end list sp1 -->
      </div>
    </div>
    </div> 
  </section>
 
  <!-- <a href="./product_detail.php?product_id=<?php echo $row_cf1['product_id']; ?>">Xem chi tiết</a> -->

</div>