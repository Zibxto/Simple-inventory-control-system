<?php
$firstnameErr = $lastnameErr = $emailErr = $sexErr = $meal_nameErr = $quantityErr = $costErr = $comp_nameErr = $comp_mailErr = $ingredient_nameErr = $recipe_nameErr = $passwordErr = $recipe_ingredientsErr = $recipe_descErr = "";
$firstname = $lastname = $email = $sex = $meal_name = $quantity = $cost = $comp_name = $comp_mail = $ingredient_name = $recipe_name = $password = $recipe_ingredients = $recipe_desc = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
	if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
	  $firstnameErr = "Only letters and white space allowed";
	}
  }

  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
	if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
	  $lastnameErr = "Only letters and white space allowed";
	}
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["sex"])) {
    $sexErr = "Sex is required";
  } else {
    $sex = test_input($_POST["sex"]);
  }

  if (empty($_POST["meal_name"])) {
    $meal_nameErr = "Meal name is required";
  } else {
    $meal_name = test_input($_POST["meal_name"]);
  }
  
  if (empty($_POST["quantity"])) {
    $quantityErr = "Quantity is required";
  } else {
    $quantity = test_input($_POST["quantity"]);
  }
  
  if (empty($_POST["cost"])) {
    $costErr = "Cost is required";
  } else {
    $cost = test_input($_POST["cost"]);
  }
  
  if (empty($_POST["comp_name"])) {
    $comp_nameErr = "Company name is required";
  } else {
    $comp_name = test_input($_POST["comp_name"]);
  }
  
  if (empty($_POST["comp_mail"])) {
    $comp_mailErr = "Company Email is required";
  } else {
    $comp_mail = test_input($_POST["comp_mail"]);
	if (!filter_var($comp_mail, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  if (empty($_POST["ingredient_name"])) {
    $ingredient_nameErr = "Ingredient name is required";
  } else {
    $ingredient_name = test_input($_POST["ingredient_name"]);
  }
  
  if (empty($_POST["recipe_name"])) {
    $recipe_nameErr = "Recipe name is required";
  } else {
    $recipe_name = test_input($_POST["recipe_name"]);
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
	$length = strlen($password);
	if ($length < 8){
	$passwordErr = "Password must be more than 8 characters";
	}
  }
  
  if (empty($_POST["recipe_ingredients"])) {
    $recipe_ingredientsErr = "Recipe ingredients is required";
  } else {
    $recipe_ingredients = test_input($_POST["recipe_ingredients"]);
  }
  
  if (empty($_POST["recipe_desc"])) {
    $recipe_descErr = "Recipe description is required";
  } else {
    $recipe_desc = test_input($_POST["recipe_desc"]);
  }
}
function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
}


?>
