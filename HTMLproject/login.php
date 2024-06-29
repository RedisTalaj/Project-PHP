<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $conn = mysqli_connect("localhost", "username", "password", "mydb");
    
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
   
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        
        $_SESSION['username'] = $username;
        header("Location: page1.php"); 
        exit();
    } else {
        
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	background-color: rgb(140, 140, 140);
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: unset;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<?php if (isset($error)) { ?>
		<p><?php echo $error; ?></p>
	<?php } ?>
<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <?php if(isset($error)) { echo "<p style='color:red'>$error</p>"; } ?>
  </div>

  <div class="container" style="background-color:rgb(140, 140, 140)">
    <button type="button" class="cancelbtn" onclick="document.location='page1.php'">Cancel</button>
    <span class="psw">Forgot <a href="forgetpassword.php">password?</a></span>
  </div>

</form>
</body>
</html>
