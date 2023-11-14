<?php
include('./connect/connect.php');

// Kiểm tra xem có tham số truyền vào không
if (isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Truy vấn cơ sở dữ liệu để lấy thông tin chi tiết sản phẩm
    $sql = "SELECT * FROM products WHERE product_id = $product_id";
    $sql2 = "SELECT * FROM products WHERE category_name = 'logo'";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    // Kiểm tra xem sản phẩm có tồn tại không
    if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result2)) {
        $product = mysqli_fetch_assoc($result);
        $product2 = mysqli_fetch_assoc($result2);
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
      include('thietke/product_detail.css');
      ?>
    </style>
</head>

<body>
        <?php include('./navbar.php');?>

    <div class="container pt-5 mt-2" style="background-color: rgba(234, 234, 234, 0.3); margin-bottom: 2cm;padding-bottom: 1.5cm;">
    <h1><div class="heading2"><span>Chi tiết</span> <?php echo $product['product_name']; ?></div></h1>
    <div class="w-100" style="height: 40px;"></div>
    <div class="row">
        <div class="col-5">
        <img class="card-img-top" src="./img/<?php echo $product['image'] ?>" alt="" style="border-radius:10px;border:1px solid black">
        </div>
        <div class="col-7">
        <img src="./img/<?php echo $product2['image']?>" alt="" class="logo_chitiet">
        <hr>
        <h3 class="heading_p"><?php echo $product['product_name']?></h3>
        <p class="cate_price">Giá sản phẩm : <?php echo number_format($product['sale_price']) . 'đ' ?> 
         <strike><?php echo number_format($product['price']) . 'đ'?></strike> <span>-<?php echo round(100 - (($product['sale_price']/$product['price'])*100)) .'%'?></span> </p>
         <!-- <hr> -->
        
        <div class="container" style=" max-width: 10cm;">
        <hr>
        <form method="POST" action="">
            <div class="quantity-container">
                Số lượng : &nbsp;
                <button type="button" onclick="decreaseQuantity()" class="quan_in minus-btn"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAGRJREFUSEvtlcEJACAMA+NmOrmOJj4EkSKIxiLEAXLt2dIApxecuBD4mXmplmqaAQ0XTe0cvFIdL1VRrJwVOAM4hTdo+gZ82m1vdFv1pS+2Y7THVL1juFRLNc2AhoumduceU4uoQOwGHzOfXXEAAAAASUVORK5CYII="/></span></button>
                <input type="number" name="quantity" id="quantity-input" value="1" style="max-width: 1.5cm; border: 0px;  background-color: rgba(222, 222, 222, 0.2); padding: 4px; margin-left: 10px; margin-right: 10px;">
                <button type="button" onclick="increaseQuantity()" class="quan_in"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAJlJREFUSEvtldENgCAMRI9NHEVHcRLjJI6ioziKuYQ/alMhgMY28Uvig9ceBnSq0IkLBzcz/znVA4At6lkBHE9V5Z54BLBH2ORgi3ZXbbHENVWHi5HhIxXBS3wxAziVHYtR03rMuBBQUoQybkm9Eqyd1npzsQViGzxO1kGqGidtEw5u+j+23lxiy3LjZB3C23UOLlZo/cD/VF/RBCcf0vPFfQAAAABJRU5ErkJggg=="/></button>
            </div>
            <br>
            
        <div class="row">
            <!-- <div class="col-6">
                <button type="submit" name="buyNow" class="c6 mot">Mua ngay</button>
            </div> -->
            <div class="col-6">
                <button type="submit" name="addToCart" class="c6">Thêm vào giỏ hàng</button>
            </div>
            </div>
        </form>
        <hr>
        
</div>
        <div class="w-100" >
            <p class="cate">Loại sản phẩm : <?php echo $product['category_name']?></p>
            <p class="cate">Mô tả sản phẩm : <?php echo $product['description']; ?></p>
        </div>
<script>
    function increaseQuantity() {
        var quantityInput = document.getElementById('quantity-input');
        quantityInput.stepUp(1);
    }

    function decreaseQuantity() {
        var quantityInput = document.getElementById('quantity-input');
        quantityInput.stepDown(1);
    }
</script>
        </div>
        <!-- <a href="add_to_cart.php?product_id=<?php echo $product['product_id']; ?>">Thêm vào giỏ hàng</a> -->
        </div>
    </div>
    
    </div>

    <?php include('./footer.php'); ?>
        <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
<?php
    } else {
        echo 'Không tìm thấy sản phẩm';
    }
} else {
    echo 'Sản phẩm không hợp lệ';
}

mysqli_close($conn);
?>