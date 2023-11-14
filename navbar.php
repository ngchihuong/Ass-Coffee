<?php
include('./connect/connect.php');
  $sql_admin = mysqli_query($conn , "SELECT * FROM accounts WHERE permission = '1'");
  $row_count = mysqli_num_rows($sql_admin);
?>
<div class="container-fluid" style="background-color: rgba(207, 188, 163, 0.5); padding-bottom: 5px;">
<div class="row">
      <div class="col-2"></div>
      <div class="col-8"></div>
    <?php
      if (isset($_SESSION['mySession'])) { ?>
        <div class="col-2">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAT9JREFUSEvNltENwjAMRK+bwCTAJjAJMAkwCTAJMAnopASlaRLbxVWJhPpR6mefXV87zHS6mbgYC14A2AJ4ht/NWoAVTOAJwDoDMYFNSEKVgwVM2LURlfAdAFX1FjCheaV5HoQvNSVrwewnJdYcSi5WrQUfAOw1VABHAPx/80wBPodeu4ClwUohHDDCXcB8jR5SsHCfw8UhcwEziGbAVIPFYNoex+xbQ6YaqhjICuZzlJ09X4Ugr9BTUd5U+zFgqX2q+38PjvLyGiUurcu71q2kimtuJMnJ95jDVu17C2xZGqVECL3U1mcN/Cs0JlK1yhpYY4GS3Cl8YJUlsMWJtPDB/i6B6btcj56H/sx1+j0lMM2A0+x5Bl8mJfDbk5jE6hlIDvaa5lLuTTAl9pY5JtH7DpM210Sq2/3YLZHZKv4AKjU2H4PULzUAAAAASUVORK5CYII="/><label><?php echo $_SESSION['mySession']?></label> &nbsp; &nbsp; &nbsp;
      <a href="./logout.php" style="text-decoration: none;">Đăng xuất</a>
      </div>
     
      <?php }else { ?>
        <div class="col-2">
      <a href="./login.php" style="text-decoration: none;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAT9JREFUSEvNltENwjAMRK+bwCTAJjAJMAkwCTAJMAnopASlaRLbxVWJhPpR6mefXV87zHS6mbgYC14A2AJ4ht/NWoAVTOAJwDoDMYFNSEKVgwVM2LURlfAdAFX1FjCheaV5HoQvNSVrwewnJdYcSi5WrQUfAOw1VABHAPx/80wBPodeu4ClwUohHDDCXcB8jR5SsHCfw8UhcwEziGbAVIPFYNoex+xbQ6YaqhjICuZzlJ09X4Ugr9BTUd5U+zFgqX2q+38PjvLyGiUurcu71q2kimtuJMnJ95jDVu17C2xZGqVECL3U1mcN/Cs0JlK1yhpYY4GS3Cl8YJUlsMWJtPDB/i6B6btcj56H/sx1+j0lMM2A0+x5Bl8mJfDbk5jE6hlIDvaa5lLuTTAl9pY5JtH7DpM210Sq2/3YLZHZKv4AKjU2H4PULzUAAAAASUVORK5CYII="/>Đăng nhập</a>
      </div>
        <?php } ?>
    </div>
</div>
<header>
        <div class="container-fluid" style="background-color: rgba(207, 188, 163, 0.9); border-radius: 0px;">
        <div class="container">
        <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <!-- add logo -->
        <a class="navbar-brand" href="trangchu.php"><img width="151" height="100" src="./img//logo.jpg" class="header_logo header-logo" alt="MixiShop">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./trangchu.php">Trang chủ</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./danhmuc.php" role="button"  aria-expanded="false">
                Danh mục sản phẩm
              </a>
              <!-- <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Áo Mixi</a></li>
                <li><a class="dropdown-item" href="#">Áo liên quân</a></li>
                <li><a class="dropdown-item" href="#">Áo Pubg</a></li>
                <li><a class="dropdown-item" href="#">Áo Refund Gaming</a></li>
              </ul> -->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./thongbao.php">Thông báo</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="./lienhe.php">Liên hệ</a>
            </li>
            
          </ul>
          <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
          <!-- <div class="box">
            <input type="checkbox" name="" id="check">
            <div class="search-box">
                <form action="" method="GET">
                <input type="text" placeholder="Nhập vào....">
                <label for="check" class="icon">
                  <i class="fa fa-search" aria-hidden="true"></i> 
                </label>
                </form>      
            </div>
          </div> -->
          <form action="./search_results.php" method="post">
              <input type="text" placeholder="Nhập vào..." name="search">
              <button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-search" aria-hidden="true"></i> Search</button>
            </form>
          
        </div>
      </div>
    </nav>
    </div>
        </div>
    
    </header>
      
       <!-- Example Code -->
       