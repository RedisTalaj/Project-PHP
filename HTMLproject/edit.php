<?php
$id = $_GET['edit'];

// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "mydb");

// Query the database to retrieve the user's information
$sql = "SELECT * FROM login WHERE row = '$id' AND username != 'admin'";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Retrieve the user's information
$row = mysqli_fetch_array($result);

// Close the database connection
mysqli_close($conn);
?>
<html>
    <title>Edit</title>
    <body>
    <form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['row']; ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    <label for="password">Password:</label>
    <input type="text" name="password" value="<?php echo $row['password']; ?>"><br><br>
    <input type="submit" value="Update">
</form>
    </body>
</html>