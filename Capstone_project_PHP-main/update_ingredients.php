<?php include 'forms/session.php';
	include "forms/db_conn.php";
	include "forms/function.php";

 ?>

<?php include 'header.php'; ?>

<?php

$ingredient_id = $_GET['id'];

 		$qs = query("SELECT * FROM ingredients WHERE ingredient_id='$ingredient_id'");
 		confirm($qs);

  ?>
    <section id="services" class="services section-bg">
			  <div class="col-6" style="margin-left: auto; margin-right: auto; margin-top: 5%;">
			
			  <div class="section-title">
 				 <h2>Update Ingredient</h2>
				 </div>
 			    <?php 
					
					while($qs_row = fetch_array($qs))
					{
					?>
				  <Form action="" method="post">
					<label> Ingredient Name </label> <br>
					<input type="text" name="meal_name" value="<?php echo $qs_row['meal_name']; ?>"  class="form-control"/><br>
					<label> Qty </label> <br>
					<input type="text" name="quantity" value="<?php echo $qs_row['quantity']; ?>"  class="form-control"/><br>
					<label> Cost </label> <br>
					<input type="text" name="cost" value="<?php echo $qs_row['cost']; ?>"  class="form-control"/><br>
					
					
					<button class="btn btn-success" name="update" type="submit"> Save </button>
					
					</Form>
						<?php 
						}
						?>
	</div>
</div>


 			
 				<?php
			 	if (isset($_POST['update'])) {
			 		$meal_name = $_POST['ingredient_name'];
					$quantity = $_POST['quantity'];
			 		$cost = $_POST['cost'];
			 		
			 		
			 	$qe = query("UPDATE ingredients SET ingredient_name='$ingredient_name', quantity='$quantity' ,cost='$cost' WHERE ingredient_id='$ingredient_id'");
			 	confirm($qe);
			 		header("location: view_ingredients.php");

			 	
			 		
			 	}

			  ?>
				
			



<?php include 'footer.php'; ?>