<?php

$id = $_POST['id'];


//connection to mysql database
$sname= "localhost";

$uname= "root";

$password = "";

$dbname = "inventory";
$conn = new mysqli($sname, $uname, $password, $dbname);

switch ($id) {

	case "restaurant":
    //extract data from form

		$compname = $_POST['comp_name'];
		$compmail = $_POST['comp_mail'];
		$compphone = $_POST['comp_phone'];
		$compaddress = $_POST['comp_address'];
		$compdesc = $_POST['comp_desc'];
		$password = $_POST['password'];
		
		
		
		$sql = "INSERT INTO restaurant set
			comp_name = '$compname'
			,comp_mail = '$compmail'
			,comp_phone = '$compphone'
			,comp_address = '$compaddress'
			,comp_desc = '$compdesc'
			,password = '$password'
			";
		
				
		if (mysqli_query($conn, $sql)=== false) {
			echo "error";
		}
		
			header("Refresh:2 url ='dashboard.php'");       
			break;

	case "customers":
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$sex = $_POST['sex'];
		$email = $_POST['email'];
		$phonenum = $_POST['phonenum'];
		$address = $_POST['adress'];
		
		
		
		$sql = "INSERT INTO customers set
			firstname = '$firstname'
			,lastname = '$lastname'
			,sex = '$sex'
			,email = '$email'
			,phonenum = '$phonenum'
			,adress = '$address'
			";
		
				
		if (mysqli_query($conn, $sql) === FALSE) {
			echo "error";
		}
		
			header("Refresh:2 url ='customers.php'");       
			 break;

		case "orders":
			$meal_name = $_POST['meal_name'];
			$quantity = $_POST['quantity'];
			$cost = $_POST['cost'];
			
			
			
			$sql = "INSERT INTO orders set
				meal_name = '$meal_name'
				,quantity = '$quantity'
				,cost = '$cost'
				";
			
					
			if (mysqli_query($conn, $sql) === FALSE) {
				echo "error";
			}
			
			
				header("Refresh:2 url ='orders.php'");       
				 break;

		case "recipes":
			$recipe_name = $_POST['recipe_name'];
			$recipe_ingredients = $_POST['recipe_ingredients'];
			$recipe_desc = $_POST['recipe_desc'];
			
			
			
			$sql = "INSERT INTO recipes set
				recipe_name = '$recipe_name'
				,recipe_ingredients = '$recipe_ingredients'
				,recipe_desc = '$recipe_desc'
				";
			
			if (mysqli_query($conn, $sql) === FALSE) {
				echo "error";
			}
			
			
				header("Refresh:2 url ='recipes.php'");       
         		break;

		case "ingredients":
				$ingredient_name = $_POST['ingredient_name'];
				$quantity = $_POST['quantity'];
				$cost = $_POST['cost'];
				
				
				
				$sql = "INSERT INTO ingredients set
					ingredient_name = '$ingredient_name'
					,quantity = '$quantity'
					,cost = '$cost'
					";
				
				if (mysqli_query($conn, $sql) === FALSE) {
					echo "error";
				}
				
					header("Refresh:2 url ='ingredients.php'");       
         			break;

		case "menu":
			$meal_name = $_POST['meal_name'];
			$cost = $_POST['cost'];
			$meal_desc = $_POST['meal_desc'];
			
			
			
			$sql = "INSERT INTO menu set
				meal_name = '$meal_name'
				,cost = '$cost'
				,meal_desc = '$meal_desc'
				";
			
			if (mysqli_query($conn, $sql) === FALSE) {
				echo "error";
			}
			
			
				header("Refresh:2 url ='menu.php'");       
				 break;

	default:
    echo "Invalid Operation";
	header("Refresh:2 url ='dashboard.php'");
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

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="dashboard.php">Home</a></li>
          <li><a class="nav-link scrollto" href="menu.php">Menu</a></li>
          <li><a class="nav-link scrollto" href="customers.php">Customers</a></li>
          <li><a class="nav-link scrollto " href="recipes.php">Recipes</a></li>
          <li><a class="nav-link scrollto" href="orders.php">Orders</a></li>
          <li><a class="nav-link scrollto" href="ingredients.php">Ingredients</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  </header><!-- End Header -->

  <main id="main">
  <!-- ======= Dashboard ======= -->
  
   <section >
      <div class="container mt-5">
			<h2> Data Operation successfully!</h2>
			<p>Redirecting... </p>
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