<?php

// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "mydb");

// Check for errors in the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// If the "Delete" button has been clicked, delete the corresponding row from the table
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM login WHERE row = $id AND username != 'admin'";
    mysqli_query($conn, $sql);
}

// Fetch data from the table
$sql = "SELECT * FROM login";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
    }
    
    th, td, {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #f2f2f2;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    tr:hover {
        background-color: #ddd;
    }
    

    .action-btn {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
    }
    h1{
        text-align: center;
    }
    button{
        border: 2px solid black;
        background-color: white;
        color: black;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        border-color: #04AA6D;
        color: green;
        margin: 40px;
        text-decoration: none;
    }
    button:hover {
        background-color: #04AA6D;
        color: white;
}
a{
    text-decoration: none;
}

</style>
<script>
    function searchTable() {
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementsByTagName("table")[0];
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 1; i < tr.length; i++) {
        // Start searching from the second row to ignore the table header row
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                break;
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

</script>
</head>
<body>
    <table>
        <h1>Manage User's Data</h1>
        <thead>
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search...">
            <tr >
                <th>row</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['row']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td class="action-btn"><a href="delete.php?delete=<?php echo $row['row']; ?>">Delete</a></td>
                    <td class="action-btn"><a href="edit.php?edit=<?php echo $row['row']; ?>">Edit</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php

// Close the database connection
mysqli_close($conn);


?>
<html>
    <body>
    <button type="submit" onclick="document.location='page1.php'">Return</button>
    </body>
</html>