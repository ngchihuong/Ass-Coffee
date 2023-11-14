<?php
include_once('connect/connect.php');

if (isset($_POST['btn'])) {
    $name = $_POST['name'];

    $image = '';
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];

    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $category_name = $_POST['category_name'];
    $description = $_POST['description'];

    $sql = mysqli_query($conn , "INSERT INTO products (product_name , price ,sale_price , category_name, image, description) VALUES ('$name', '$price' , $sale_price , '$category_name' , '$image', '$description')");
    move_uploaded_file($image_tmp_name, './img/'.$image);
    header('location:./admin/show_product.php');
}
?>
<!Doctype html>
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
        include('thietke/add_product.css');
        ?>
    </style>
</head>

<body>
    <form action="add_product.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            
            <!-- <div class="col-4"></div> -->
            <h2 class="mt-0">Welcome to Add Product</h2>
                <p>Name:</p>
                <input type="text" name="name">
                <p>Price:</p>
                <input type="text" name="price" >
                <p>Sale Price:</p>
                <input type="text" name="sale_price" >
                <p>Category Name:</p> 
                <input type="text" name="category_name" id="" >

                <label class="mt-2" style="font-size: 25px;">Image : <input type="file" name="image" style="border: 0; padding: 0; margin: 0;color: rgba(0, 0, 0, 0); "></label>   
                
                <p>Description:</p>
                <input type="text" name="description">
                
                
        </div>
        <button class="btn btn-success" type="submit" name="btn">Thêm</button>
        <button class="btn btn-secondary home" ><a href="./admin/admin_service.php">Trở về</a></button>
       
       
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>