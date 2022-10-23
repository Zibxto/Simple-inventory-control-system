<?php
include "forms/db_conn.php";
include "forms/tb_create.php";


if (isset($_GET['login'])) {
  if ($_GET['login'] == 'invalid') {
    echo "<script>alert('Company name or Company password incorrect')</script>";
  }
}

if (isset($_GET['signout'])) {
  
    echo "<script>alert('Logout Successful')</script>";
  
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title> Capstone Project PHP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html"><span style="color: blue;">I</span>M</a></h1>
      </div>

  </header><!-- End Header -->

  <main id="main">
  <!-- ======= Registration Form ======= -->
  
    <section class="form">

      
<div class="container mt-5">

  <h2 >Signup Form</h2>
  <span style="color:#FF0000; font-size:14px">* Required</span>
  
  
  <Form action="create.php" method="post">
  	<input type="hidden" name="id" value="restaurant" />
    <label> Company Name <span style="color:#FF0000">*</span></label> <br>
    <input type="text" name="comp_name"  class="form-control"/><br>
    <label> Company Mail <span style="color:#FF0000">*</span></label> <br>
    <input type="text" name="comp_mail"  class="form-control"/><br>
    <label> Company Phone Number </label> <br>
    <input type="text" name="comp_phone"  class="form-control"/><br>
    <label> Company Address </label> <br>
    <input type="text" name="comp_address"  class="form-control"/><br>
    <label> Company Description </label> <br>
    <input type="message" name="comp_desc"  class="form-control"/><br>
	<label> Company Password <span style="color:#FF0000">*</span></label> <br>
    <input type="text" name="password"  class="form-control"/><br>
    <button class="btn btn-success" type="submit"> Sign Up </button> <br>

    <a href="login.php">Already have an account? sign in here...</a>

    
    </Form>
  
  
  </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span style="color: blue;">I</span>M</strong>. All Rights Reserved
        </div>
        <div class="credits">
           Designed by <a href="#">Group15</a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>