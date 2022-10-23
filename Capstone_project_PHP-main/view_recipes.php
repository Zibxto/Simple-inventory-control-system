<?php include 'forms/session.php';
	include "forms/db_conn.php";
	include "forms/function.php";

 ?>

<?php include 'header.php'; ?>
 <div class="card" style="margin-top: 5%;">
    <div class="table-responsive">
        <table class="table table-hover table-borderless table-striped">
            <thead class="card-head">
              <tr class="btn-primary" style="padding: 4px;">
			  <th scope="col">Id</th>
                <th scope="col">Recipe Name</th>
                <th scope="col">Recipe Ingredients</th>
                <th scope="col">Recipe Description</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody class="card-body">

    <?php

    $query = query("SELECT * FROM recipes ORDER BY recipe_id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        $session_id = $row['recipe_id'];
       
    
     ?>
               
              <tr>
			  <td><?php echo $row['recipe_id']; ?></td>
                <td><?php echo $row['recipe_name']; ?></td>
                <td><?php echo $row['recipe_ingredients']; ?></td>
                <td><?php echo $row['recipe_desc']; ?></td>
                <td>
                    <a href="update_recipes.php<?php echo '?id='.$session_id; ?>" class="btn btn-success" style="overflow: hidden;">Update</a>
                </td>
                <td>
                    <a href="<?php echo '?delete='.$session_id; ?>" class="btn btn-danger" style="overflow: hidden;">Delete</a>
                </td>
              </tr>
      <?php

 }

        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $qy = query("DELETE FROM recipes WHERE recipe_id='$delete'");
            confirm($qy);
            header('location: view_recipes.php');
        }  

  ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php';  ?>