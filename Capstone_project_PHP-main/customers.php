<?php include 'header.php';
      include 'forms/session.php';
	  include 'forms/validate.php';
	include "forms/db_conn.php";
	include "forms/function.php";
			  ?>

  <main id="main">
  <!-- ======= Customers ======= -->
  <section id="services" class="services section-bg">
      <div class="container mt-5">
        <div class="section-title">
          <h2> Customers Panel </h2>
        <p> What would you like to do? </p>
        </div>

        <div class="row">
			<div class="col-8">
    			<div class="form">  
 				 <h2>Create New Customer</h2>
 				 <span style="color:#FF0000; font-size:14px">* Required</span>
				  <Form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<label> First Name</label><span style="color:#FF0000">* <?php echo $firstnameErr;?></span> <br>
					<input type="text" name="firstname"  class="form-control"/><br>
					<label> Last Name</label><span  style="color:#FF0000">* <?php echo $lastnameErr;?></span> <br>
					<input type="text" name="lastname" class="form-control"/><br>
					<label>Sex</label><span style="color:#FF0000">* <?php echo $sexErr;?></span>  <br />
					<input type="radio" name="sex" value="female" class="form">&nbsp;Female &nbsp;
					<input type="radio" name="sex" value="male" class="form">&nbsp;Male &nbsp;
					<input type="radio" name="sex" value="other" class="form">&nbsp;Other<br/>
					<label>Email </label><span style="color:#FF0000">* <?php echo $emailErr;?></span><br>
					<input type="text" name="email"  class="form-control"/><br />
					<label> Phone Number </label> <br>
					<input type="text" name="phonenum"  class="form-control"/><br>
					<label>Residential Address </label> <br>
					<input type="text" name="adress"  class="form-control"/><br>
					<button class="btn btn-success" name="submit" type="submit"> Save </button>
					
					</Form>
					<?php
					if(isset($_POST['submit'])){
					if ($firstnameErr == "" && $lastnameErr =="" && $emailErr =="" && $sexErr == ""){
					if (isset($_POST['submit'])) {
			 		$firstname = $_POST['firstname'];
			 		$lastname = $_POST['lastname'];
			 		$sex = $_POST['sex'];
			 		$email = $_POST['email'];
			 		$phonenum = $_POST['phonenum'];
			 		$address = $_POST['adress'];
							
						$qe = query("INSERT INTO customers set
					firstname = '$firstname'
					,lastname = '$lastname'
					,sex = '$sex'
					,email = '$email'
					,phonenum = '$phonenum'
					,adress = '$address'
							");
						confirm($qe);
							header("location: customers.php");
							
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
              <h4>View Customer Database</h4>
              <p>View your existing customers.</p>
			  <a href="view_customers.php" class="btn"><i class="bx bx-arrow-to-right"></i></a>
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