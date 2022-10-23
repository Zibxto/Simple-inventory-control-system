<?php include 'forms/session.php';
	include "forms/db_conn.php";
	include "forms/function.php";

 ?>

<?php include 'header.php'; ?>

<?php

$customer_id = $_GET['id'];

 		$qs = query("SELECT * FROM customers WHERE customer_id ='$customer_id'");
 		confirm($qs);

  ?>
			  <section id="services" class="services section-bg">
			  <div class="col-6" style="margin-left: auto; margin-right: auto; margin-top: 5%;">
			
			  <div class="section-title">
 				 <h2>Update Customer</h2>
				 </div>
 			  <?php 
					
					while($qs_row = fetch_array($qs))
					{
					?>

				  <Form action="" method="post">
					<label> First Name </label> <br>
					<input type="text" name="firstname" value="<?php echo $qs_row['firstname']; ?>"  class="form-control"/><br>
					<label> Last Name </label> <br>
					<input type="text" name="lastname" value="<?php echo $qs_row['lastname']; ?>"  class="form-control"/><br>
					<label> Sex </label> <br>
					<input type="text" name="sex" value="<?php echo $qs_row['sex']; ?>"  class="form-control"/><br>
					<label> Email </label> <br>
					<input type="text" name="email" value="<?php echo $qs_row['email']; ?>"  class="form-control"/><br>
					<label> Phone Number </label> <br>
					<input type="text" name="phonenum" value="<?php echo $qs_row['phonenum']; ?>"  class="form-control"/><br>
					<label> Address </label> <br>
					<input type="text" name="address" value="<?php echo $qs_row['adress']; ?>"  class="form-control"/><br>
					
					<button class="btn btn-success" name="update" type="submit"> Save </button>
					
					</Form>
							<?php 
						}
						?>
	</div>
</section>


 			
 				<?php
			 	if (isset($_POST['update'])) {
			 		$firstname = $_POST['firstname'];
			 		$lastname = $_POST['lastname'];
			 		$sex = $_POST['sex'];
			 		$email = $_POST['email'];
			 		$phonenum = $_POST['phonenum'];
			 		$address = $_POST['address'];
			 		
			 	$qe = query("UPDATE customers SET firstname='$firstname',lastname='$lastname', sex='$sex',email='$email',phonenum='$phonenum', adress='$address' WHERE customer_id='$customer_id'");
			 	confirm($qe);
			 		header("location: view_customers.php");
			 		
			 	}

			  ?>
				
			



<?php include 'footer.php'; ?>