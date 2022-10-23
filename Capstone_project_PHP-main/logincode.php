<?php
	include'forms/db_conn.php'; 
	include 'forms/function.php';

?>


<?php

	if (isset($_POST['login'])) {
		$comp_name = escape_string($_POST['comp_name']);
		$password = escape_string($_POST['password']); 

		$query = query("SELECT * FROM restaurant WHERE comp_name='$comp_name' AND password='$password'");
		confirm($query);
		$row = fetch_array($query);

		if (mysqli_num_rows($query) > 0) {
			session_start();
			session_regenerate_id();
			$_SESSION['id'] = $row['id'];
			header("location: dashboard.php");
			session_write_close();
			exit();

		}
		else {
				header("location: index.php?login=invalid");	
				session_write_close();
				exit();
			}
		
	}

?>