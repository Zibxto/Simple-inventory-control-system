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
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Num</th>
                <th scope="col">Address</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody class="card-body">

    <?php

    $query = query("SELECT * FROM customers ORDER BY customer_id ASC");
    confirm($query); 

    while ($row = fetch_array($query)) {
        $session_id = $row['customer_id'];
       
    
     ?>
               
              <tr>
			  <td><?php echo $row['customer_id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['sex']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phonenum']; ?></td>
                <td><?php echo $row['adress']; ?></td>
                <td>
                    <a href="update_customers.php<?php echo '?id='.$session_id; ?>" class="btn btn-success" style="overflow: hidden;">Update</a>
                </td>
                <td>
                    <a href="<?php echo '?delete='.$session_id; ?>" class="btn btn-danger" style="overflow: hidden;">Delete</a>
                </td>
              </tr>
      <?php

 }

        if (isset($_GET['delete'])) {
            $delete = $_GET['delete'];
            $qy = query("DELETE FROM customers WHERE customer_id='$delete'");
            confirm($qy);
            header('location: view_customers.php');
        }  

  ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'footer.php';  ?>