<?php include 'forms/session.php';
	include "forms/db_conn.php";
	include "forms/function.php";

 ?>

<?php include 'header.php'; ?>

<?php

$recipe_id = $_GET['id'];

 		$qs = query("SELECT * FROM recipes WHERE recipe_id='$recipe_id'");
 		confirm($qs);

  ?>
  <section id="services" class="services section-bg">
			  <div class="col-6" style="margin-left: auto; margin-right: auto; margin-top: 5%;">
			
			  <div class="section-title">
 				 <h2>Update Recipes</h2>
				 </div>
 			    <?php 
					
					while($qs_row = fetch_array($qs))
					{
					?>
				  <Form action="" method="post">
					<label> Recipe Name </label> <br>
					<input type="text" name="recipe_name" value="<?php echo $qs_row['recipe_name']; ?>"  class="form-control"/><br>
					<label> Recipe Ingredients </label> <br>
					<input type="text" name="recipe_ingredients" value="<?php echo $qs_row['recipe_ingredients']; ?>"  class="form-control"/><br>
					<label> Recipe Description </label> <br>
					<input type="text" name="recipe_desc" value="<?php echo $qs_row['recipe_desc']; ?>"  class="form-control"/><br>
					
					<button class="btn btn-success" name="update" type="submit"> Save </button>
					
					</Form>
					<?php 
						}
						?>
	</div>
</section>


 			
 				<?php
			 	if (isset($_POST['update'])) {
			 		$recipe_name = $_POST['recipe_name'];
			 		$recipe_ingredients = $_POST['recipe_ingredients'];
			 		$recipe_desc = $_POST['recipe_desc'];
			 		
			 	$qe = query("UPDATE recipes SET recipe_name='$recipe_name',recipe_ingredients='$recipe_ingredients', recipe_desc='$recipe_desc' WHERE recipe_id='$recipe_id'");
			 	confirm($qe);
			 		header("location: view_recipes.php");
			 		
			 	}

			  ?>
				
			



<?php include 'footer.php'; ?>