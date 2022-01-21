<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
<!--===============================================================================================-->
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body>
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
  	$_SESSION['username'] = $row['name'];
  	$_SESSION['success'] = "You are now logged in";
  	header('location: http://localhost/khanhlinh.com/home.php');
  }
}
?>
	
	<div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
				<div class="login-pic js-tilt" data-tilt>
					<img src="image/Cat_hand.jpg" alt="IMG">
				</div>

				<form name="regform" class="login-form validate-form" method="post" action = "database/create-account.php">
					<span class="login-form-title">
						Welcome new friend!
					</span>

                    <div class="wrap-input validate-input">
						<input id="regname" class="input" type="text" name="regname" placeholder="Full name" required>
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input validate-input" data-validate = "Valid email is required">
						<input id="username" class="input" type="text" name="username" placeholder="Username" onkeyup="validEmail()" required>
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="php_mess php_name">
						<?php if(isset($name_error)) { ?>
							<p id = "name_error"> <?php echo $name_error ?></p>
						<?php } ?>
					</div>
					<div class="message" id="email-check">
                        <p id="mail" class="invalid-mail">Invalid email</p>
                    </div>

					<div class="wrap-input validate-input" data-validate = "Password is required">
						<input id="psw" class="input" type="password" name="pass"  placeholder="Password" onkeyup="validation()" required>
						<span class="focus-input"></span>
						<span class="symbol-input">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="php_mess">
						<?php if(isset($password_error)) { ?>
							<p id = "pass_error"> <?php echo $password_error ?></p>
						<?php } ?>
					</div>
					<div class="php_mess">
						<?php if(isset($password_error_lowcase)) { ?>
							<p id = "pass_error_lowcase"> <?php echo $password_error_lowcase ?></p>
						<?php } ?>
					</div>

					<div class="php_mess">
						<?php if(isset($password_error_upcase)) { ?>
							<p id = "pass_error_upcase"> <?php echo $password_error_upcase ?></p>
						<?php } ?>

					</div>

					<div class="php_mess">
						<?php if(isset($password_error_number)) { ?>
							<p id = "pass_error_number"> <?php echo $password_error_number ?></p>
						<?php } ?>
					</div>

                    <div id="message" class="message">
                        <p id="mess-title">Password must contain the following:</p>
                        <p id="letter" class="invalid-lower">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid-upper">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid-numb">A <b>number</b></p>
                        <p id="length" class="invalid-length">Minimum <b>8 characters</b></p>
                    </div>
					
					<div class="container-login-form-btn">
						<button class="login-form-btn" name="reg-user" onclick = 'return checksubmit()'>
							Register
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Already a member? Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<script src="JS/login.js"></script>
<!--===============================================================================================	-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->

</body>
</html>