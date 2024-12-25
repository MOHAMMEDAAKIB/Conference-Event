<?php


include ('../../conn.php');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// SQL DELETE query
$sql = "DELETE FROM `about` ";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record deleted successfully!');location.replace('Event_organize.php');</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>