<?php 

$username = $_POST['user_name'];
$password = $_POST['password'];

// Connect to the database
include ('../../conn.php');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// SQL queries
$sqlad = "SELECT * FROM admin_log_de WHERE user_Name = '$username' AND password = '$password'";

// Execute queries

$ad = mysqli_query($conn, $sqlad);

// Verify if rows were returned
if (mysqli_num_rows($ad) > 0) {
    echo "<script>location.replace('Event_organize.php');</script>";
}
 else {
    echo "<script>alert('Username or password not found.');location.replace('loging.html')</script>";
}

// Close the connection
mysqli_close($conn);
?>
