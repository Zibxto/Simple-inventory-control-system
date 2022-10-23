<?php include 'header.php';
      include 'forms/session.php';
	  include 'forms/validate.php';
	include "forms/db_conn.php";
	include "forms/function.php";
			  ?>


  <main id="main">
  <!-- ======= Ingredient Level ======= -->
  <section id="services" class="services section-bg">
      <div class="container mt-5">
        <div class="section-title">
          <h2> Ingredient Level Panel </h2>
        <p> What would you like to do? </p>
        </div>

        <div class="row">
			<div class="col-8">
    			<div class="form">  
 				 <h2>Add an Ingredient</h2>
 				 <span style="color:#FF0000; font-size:14px">* Required</span>
				    <Form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<label> Name <span style="color:#FF0000">* <?php echo $ingredient_nameErr;?></span></label> <br>
					<input type="text" name="ingredient_name"  class="form-control"/><br>
					<label> Quantity <span style="color:#FF0000">* <?php echo $quantityErr;?></span></label> <br>
					<input type="text" name="quantity"  class="form-control"/><br>
					<label> Cost <span style="color:#FF0000">* <?php echo $costErr;?></span></label> <br>
					<input type="text" name="cost"  class="form-control"/><br>
					
					<button class="btn btn-success" name="submit" type="submit"> Save </button>
					
					</Form>
					<?php
					if(isset($_POST['submit'])){
					if ($ingredient_nameErr == "" && $quantityErr =="" && $costErr ==""){
					if (isset($_POST['submit'])) {
			 		$ingredient_name = $_POST['ingredient_name'];
					$quantity = $_POST['quantity'];
					$cost = $_POST['cost'];
							
						$qe = query("INSERT INTO ingredients set
					ingredient_name = '$ingredient_name'
					,quantity = '$quantity'
					,cost = '$cost'
					");
						confirm($qe);
							header("location: ingredients.php");
							
			 	}

					} else {
					echo "Fill required fields";
					}
					}
					?>
	  				</div>
					</div>
			<div class="col-4" style="margin-top: 10%;">
            <div class="icon-box">
              <h4>View Ingredients</h4>
              <p>View your ingredients.</p>
			  <a href="view_ingredients.php" class="btn"><i class="bx bx-arrow-to-right"></i></a>
			  </div>
			</div>
  
  </div>
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