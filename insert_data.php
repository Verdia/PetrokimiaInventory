<?php
include('config.php')
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome to list item of Inventory System PT.PETROKIMIA GRESIK</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/flat-icon/flaticon.css">
  <link rel="stylesheet" href="temp/css/styles.css">
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="temp/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="temp/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="temp/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="temp/css/util.css">
	<link rel="stylesheet" type="text/css" href="temp/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  <div class="main-wrapper">
    <header class="bgHeader">
      <nav class="barNavigation d-flex flex-row bd-highlight mb-3">
        <div>
          <a href="http://localhost/InventorySystem/index.php" class="headerPetro">PT. PETROKIMIA INDUSTRI</a>
        </div>
        <div class="barCollapse">
          <ul class="barDashboard d-flex flex-row bd-highlight mb-3">
            <li><a class="dashboardI" href="http://localhost/InventorySystem/index.php">DASHBOARD</a></li>
            <li><a class="addBarang" href="http://localhost/InventorySystem/save_data.php">DAFTAR BARANG</a></li>
            <li><a class="logout" href="index.php?logout='1'">LOGOUT</a></li>  
          </ul>
        </div>
      </nav>
    </header>
        
    <div style="display: grid;">  
      <h2 class="ed_h2Tambah">Tambah Barang</h2>
        <form method="POST" id="formInsert" action="insert_data.php">
          <?php include('error.php'); ?>
          <div class="form-group">
            <label class="usr">Code Item:</label>
            <input type="text" name="code_unique" class="form-code-control">
            <label class="usr">Name Item:</label>
            <input type="text" name="nama_barang" class="form-name-control">
            <label class="usr">Location Item:</label>
            <input type="text" name="location" class="form-location-control">
            <label class="usr">Date:</label>
            <input type="date" name="date" class="form-date-control">
            <label class="usr">ID PIC:</label>
            <input type="text" name="id_pic" class="form-idpic-control">
            <label class="usr">PIC name:</label>
            <input type="text" name="nama_pic" class="form-pic-control">
            <label class="usr">Status item:</label><br/>
            <select class="choice_status" id="status" name="status">
              <option value="Ready">Ready stock</option>
              <option value="dipinjam">Borrowed</option>
            </select>
            <button class="addItem" name="insert">Insert Item</button>
          </div>
        </form>

        </div>
    
        <footer class="footer footer--bg">
        <div class="container">
          <div class="page-section">
            <div class="row gutters-100">
              <div class="col-md-4 col-lg-3">
                <div class="footer__first">
                  <h2 class="footer__title">PT. PETROKIMIA GRESIK</h2>
                  <p class="footer-first__paragraph">Petrokimia Gresik merupakan perusahaan berwawasan lingkungan yang menempati areal lebih dari 450 ha di Kabupaten Gresik</p>
                  <ul class="footer-first__social-icons">
                    <li><a href="https://www.facebook.com/PetrokimiaGresikOfficial/"><i class="flaticon-facebook-letter-logo"></i></a></li>
                    <li><a href="https://www.facebook.com/PetrokimiaGresikOfficial/"><i class="flaticon-twitter-logo"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-2">
                <div class="footer__second">
                  
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer__third">
                  <h2 class="footer__title">CONTACT US</h2>
                  <ul>
                    <li><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:konsumen@petrokimia-gresik.com">konsumen@petrokimia-gresik.com</a></li>
                    <li><span class="glyphicon glyphicon-earphone"></span> <a href="https://api.whatsapp.com/send?phone=0811344774&amp;text=Halo%20Petrokimia%20Gresik,%20saya%20mau%20bertanya">0811344774</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="footer__fourth">
                  <h4 class="footer__title">INSTAGRAM</h4>
                  <div class="row">
                    <ul>
                      <li><a href="https://www.instagram.com/p/B9i_PV7HIq6/"><img src="assets/images/ig1.jpg" alt=""></a></li>
                      <li><a href="https://www.instagram.com/p/B9lDOWrnMVy/"><img src="assets/images/ig2.jpg" alt=""></a></li>
                      <li><a href="https://www.instagram.com/p/B9oRmkDnTJ3/"><img src="assets/images/ig3.jpg" alt=""></a></li>
                    </ul>
                  </div>
                  <div class="row">
                    <ul>
                      <li><a href="https://www.instagram.com/p/B91FR2XnFtu/"><img src="assets/images/ig4.jpg" alt=""></a></li>
                      <li><a href="https://www.instagram.com/p/B99ReQknKjc/"><img src="assets/images/ig5.jpg" alt=""></a></li>
                      <li><a href="https://www.instagram.com/p/B96Ffgcnh7B/"><img src="assets/images/ig6.jpg" alt=""></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <hr class="footer__horizontal-bar">
            <p class="footer__bottom-paragraph">&copy; Copyright 2017 <a href="#" style="color: #00aafe;font-weight:bold;">DartThemes</a>. All Rights Reserved</p>
          </div>
        </div>
        </footer>
  </div>
    
    
  

  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {

      var $videoSrc = $("#video").attr("src");

      $('#myModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc); 
      });



    });
  </script>
</body>
</html>





