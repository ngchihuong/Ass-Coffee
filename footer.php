<?php 
include('./connect/connect.php');

if (isset($_POST['btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $sql_footer = mysqli_query($conn , "INSERT INTO client_info (name , email ,phone_number) VALUES ('$name', '$email' , '$phone_number')");
  header('location:trangchu.php');
}
?>
<div class="w-100" style="height: 1vh; "></div>
<footer id="footer" style="background-color: rgba(207, 188, 163, 0.9);">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="heading6">Liên hệ <span>với chúng tôi</span></div>
            <p class="heading7">Mọi thắc mắc xin liên hệ qua thông tin bên phải của chúng tôi
              <br>Hoặc gửi thông tin của bạn để chúng tôi liên hệ giải quyết nếu có thắc mắc?
            </p>
            <form action="./footer.php" method="post" enctype="multipart/form-data">
              <input class="form-control" type="text" placeholder="Tên" aria-label="default input example" name="name"><br>
            <input class="form-control" type="email" placeholder="Email" aria-label="default input example" name="email"><br>
            <input class="form-control" type="number" placeholder="Số điện thoại" aria-label="default input example" name="phone_number"><br>
            <button id="contact-btn" name="btn" type="submit">Gửi tin nhắn</button>
            </form>
          </div>
          <div class="col-md-5" id="col">
            <h1 class="heading6">Thông tin cửa hàng.</h1>
            <p><i class="fa-regular fa-envelope"></i> <a href="mailto:nguyenchihuong232@gmail.com" class="mail">nguyenchihuong232@gmail.com</a></p>
            <p ><i class="fa-solid fa-phone"></i> <label class="phone"> +84466622868</label></p>
            <p><i class="fa-solid fa-building-columns"></i> <label class="fullname">Nguyễn Chí Hướng </label> </p>
            <b >Liên hệ với tôi để thực hiện đặt hàng đặc biệt, đặt câu hỏi, hoặc chia sẻ ý kiến của bạn. Chúng tôi rất mong được tiếp tục sự hợp tác và phục vụ bạn một cách tốt nhất <h2>Xin Cảm Ơn!</h2> </b>

          </div>
        </div>
      </div>
    </footer>
