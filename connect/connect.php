<?php 
      $conn = new mysqli('localhost:8081' , 'root' , '' , 'cuahangcaphe');

      if ($conn) {
          // mysqli_query($conn, "SET NAME  ");
        //   echo "Đã kết nối database";
      }else {
          echo "False";
      }
?>