<?php
session_start();

// initializing variables
$username = "";
$regname    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'mydb');

// REGISTER USER
if (isset($_POST['reg-user'])) {
  // receive all input values from the form
  $regname = mysqli_real_escape_string($db, $_POST['regname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($regname)) { array_push($errors, "Your name is required"); }
  if (empty($username)) { array_push($errors, "Valid email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
      array_push($errors, "Username already exists");
	    echo "<script>if(confirm('Username already exists')){document.location.href='http://localhost/khanhlinh.com/register.php'};</script>";
    }

  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO users (name, username, password) VALUES ('$regname', '$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: http://localhost/khanhlinh.com/home.php');
  }
}
?>