<?php
$Time = $_POST['time'];
$AM_PM = $_POST['AM_PM'];
$Title = $_POST['Event_title'];
$Speeker_name = $_POST['Speker_name'];


// Corrected the function name to `mysqli_connect`
include ('../../../conn.php');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}


$sql = "INSERT INTO Day1(Time,AMPM,Tittle,speekerName) VALUES('$Time', '$AM_PM', '$Title', '$Speeker_name')";

// Corrected the function name to `mysqli_query`
$w = mysqli_query($conn, $sql);

if ($w ) {
    echo "<script> alert('Saved successfully!');location.replace('../Event_organize.php');</script>";
} else {
    echo "Error executing query: " . mysqli_error($conn);
}

?>
