<?php include 'forms/session.php';
	include "forms/db_conn.php";
	include "forms/function.php";

 ?>

<?php include 'header.php'; ?>

<?php

$meal_id = $_GET['id'];

 		$qs = query("SELECT * FROM menu WHERE meal_id='$meal_id'");
 		confirm($qs);

  ?>
    <section id="services" class="services section-bg">
			  <div class="col-6" style="margin-left: auto; margin-right: auto; margin-top: 5%;">
			
			  <div class="section-title">
 				 <h2>Update Meal</h2>
				 </div>
 			    <?php 
					
					while($qs_row = fetch_array($qs))
					{
					?>
				  <Form action="" method="post">
					<label> Meal Name </label> <br>
					<input type="text" name="meal_name" value="<?php echo $qs_row['meal_name']; ?>"  class="form-control"/><br>
					<label> Cost </label> <br>
					<input type="text" name="cost" value="<?php echo $qs_row['cost']; ?>"  class="form-control"/><br>
					<label> Meal Descrption </label> <br>
					<input type="text" name="meal_desc" value="<?php echo $qs_row['meal_desc']; ?>"  class="form-control"/><br>
					
					<button class="btn btn-success" name="update" type="submit"> Save </button>
					
					</Form>
						<?php 
						}
						?>
	</div>
</section>


 			
 				<?php
			 	if (isset($_POST['update'])) {
			 		$meal_name = $_POST['meal_name'];
			 		$cost = $_POST['cost'];
			 		$meal_desc = $_POST['meal_desc'];
			 		
			 	$qe = query("UPDATE menu SET meal_name='$meal_name', cost='$cost', meal_desc='$meal_desc' WHERE meal_id='$meal_id'");
			 	confirm($qe);
			 		header("location: view_menu.php");

			 	
			 		
			 	}

			  ?>
				
			



<?php include 'footer.php'; ?>