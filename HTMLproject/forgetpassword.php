
<?php
if (isset($_POST['email'])) {
	$email = $_POST['email'];

	// Check if the email address is valid
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid email address";
	} else {
		// Check if the email address exists in the database
		$conn = mysqli_connect("localhost", "username", "password", "mydb");
		$sql = "SELECT * FROM login WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) == 1) {
			// Generate a new password
			$new_password = substr(md5(mt_rand()), 0, 8);
			
			// Update the user's password in the database
			$sql = "UPDATE login SET password='$new_password' WHERE email='$email'";
			mysqli_query($conn, $sql);

			// Send the new password to the user's email address
			$subject = "New Password";
			$message = "Your new password is: $new_password";
			mail($email, $subject, $message);

			$success = "A new password has been sent to your email address";
		} else {
			$error = "Email address not found";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
	<h2>Forgot Password</h2>
	<?php if (isset($success)) { ?>
		<p style="color:green"><?php echo $success; ?></p>
	<?php } ?>
	<?php if (isset($error)) { ?>
		<p style="color:red"><?php echo $error; ?></p>
	<?php } ?>
	<form action="forgetpassword.php" method="post">
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required>
		<button type="submit">Submit</button>
	</form>
</body>
</html>
