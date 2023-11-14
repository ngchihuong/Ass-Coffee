<?php
include('./connect/connect.php'); 
?>  
<?php
    $this_id = $_GET['this_id'];
    echo $this_id;

    $sql_delete = mysqli_query($conn, "UPDATE products SET status = '0' WHERE product_id = '$this_id'");
    header('location:./admin/show_product.php');
?>
