<?php
$id = $_POST['id'];
$conn = mysqli_connect("localhost", "username", "password", "mydb");
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Update the user's information in the database
$sql = "UPDATE login SET username = '$username', email = '$email', password = '$password' WHERE row = '$id' AND username != 'admin'";
if (mysqli_query($conn, $sql)) {
    echo "User updated successfully";
} else {
    echo "Error updating user: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
<html>
    <body>
    <button type="submit" onclick="document.location='delete.php'">Return</button>
    </body>
</html>