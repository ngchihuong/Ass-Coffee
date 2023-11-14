<?php
include_once('connect/connect.php');

$this_id = $_GET['this_id'];
if ($this_id !== null) {
    $sql_edit = mysqli_query($conn, "SELECT * FROM products WHERE status = '1' AND product_id =".$this_id);
    $row_edit = mysqli_fetch_array($sql_edit);
    echo "<br>";
if (isset($_POST['btn'])) {
    $name = $_POST['name'];

    $image = '';
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];

    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $category_name = $_POST['category_name'];
    $description = $_POST['description'];

    $sql = mysqli_query($conn , "UPDATE products SET product_name = '$name', price = '$price', sale_price = '$sale_price', category_name = '$category_name', image = '$image', description = '$description' WHERE product_id =".$this_id);
    move_uploaded_file($image_tmp_name, './img/'.$image);
    header('location:./admin/show_product.php');
    }
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
        include('thietke/login.css');
        ?>
    </style>
</head>

<body>
    <form action="edit_product.php?this_id=<?php echo $this_id; ?>" method="post" enctype="multipart/form-data">
    <div class="container edit">
        <div class="row">
            <!-- <div class="col-4"></div> -->
            <h2 class="mt-0">Welcome to Edit <?php echo $row_edit['product_name']?></h2>
                <p>Name:</p>
                <input type="text" name="name" value="<?php echo $row_edit['product_name'] ?> ">
                <p>Price:</p>
                <input type="text" name="price" value="<?php echo $row_edit['price'] ?> ">
                <p>Sale Price:</p>
                <input type="text" name="sale_price" value="<?php echo $row_edit['sale_price'] ?> ">
                <p>Category Name:</p> 
                <input type="text" name="category_name" id="" value="<?php echo $row_edit['category_name'] ?> ">

                <label class="mt-2" style="font-size: 25px;">Image : <input type="file" name="image" style="border: 0; padding: 0; margin: 0;color: rgba(0, 0, 0, 0); "></label>   
                
                <p>Description:</p>
                <input type="text" name="description" value="<?php echo $row_edit['description'] ?> ">
                
                
        </div>
        <button class="btn btn-success" type="submit" name="btn">Sửa</button>
        <button class="btn btn-secondary home" ><a href="./admin/admin_service.php">Trở về</a></button>
       
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>