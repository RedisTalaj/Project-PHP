<?php
// Start a session
session_start();

// Connect to the database
$dbhost = 'localhost';
$dbuser = 'username';
$dbpass = 'password';
$dbname = 'mydb';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check for errors in the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// If the form has been submitted, insert the user's information into the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  // Check if the username and email already exist in the database
  $sql = "SELECT * FROM login WHERE username = '$username' OR email = '$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['message'] = "Username or email already exists!";
  } else {
    $sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
      $_SESSION['message'] = "You have been signed up!";
      $_SESSION['loggedin'] = true; // set the session variable
      $_SESSION['username'] = $username; // save the username in the session
      header("Location: page1.php");
    } else {
      $_SESSION['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

// Close the database connection
mysqli_close($conn);


?>


<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Sign Up</h2>
        <label for="username">Username:</label>
        <input type="text" placeholder="Enter Username" id="username" name="username" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" placeholder="Enter Email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" placeholder="Enter Password" id="password" name="password" required><br><br>

        <input type="submit" value="Sign Up">
        <br></br>
        <div class="container" style="background-color:gray">
            <button type="button" class="cancelbtn" onclick="document.location='page1.php'">Cancel</button>
			<?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?>
        </div>
      </form>      
</body>
</html>
