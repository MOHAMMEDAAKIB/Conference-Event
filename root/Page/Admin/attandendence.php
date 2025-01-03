<?php
date_default_timezone_set("Asia/Colombo"); 
$name = $_COOKIE['data1'] ?? null;
$phone = $_COOKIE['data2'] ?? null;
$email = $_COOKIE['data3'] ?? null;
$address = $_COOKIE['data4'] ?? null;

$currantTime = date("H:i:s"); 
$crrentdate = date("Y-m-d");

$connect = mysqli_connect('localhost', 'root', '', 'event_managment_db');

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to check if email exists for a given name
$sql1 = "SELECT `Email` FROM `customers_details` WHERE `Name` = ?";
$sql3 = "INSERT INTO `attandence`(`Name`, `time-in`, `Email`) VALUES(?, ?, ?)";

// Prepare and execute the first query to fetch email based on name
$stmt1 = mysqli_prepare($connect, $sql1);
mysqli_stmt_bind_param($stmt1, "s", $name);
mysqli_stmt_execute($stmt1);
mysqli_stmt_store_result($stmt1);

if (mysqli_stmt_num_rows($stmt1) > 0) {
    // Bind and fetch email from the result of the first query
    mysqli_stmt_bind_result($stmt1, $db_email);
    mysqli_stmt_fetch($stmt1);
    
    // If the fetched email doesn't match the provided email
    if ($db_email != $email) {
        // Insert the attendance record using a prepared statement
        $stmt3 = mysqli_prepare($connect, $sql3);
        mysqli_stmt_bind_param($stmt3, "sss", $name, $currantTime, $email);
        
        if (mysqli_stmt_execute($stmt3)) {
            echo "<script>
                alert('Dear " . htmlspecialchars($name) . ", your attendance detail is:\\nDate: " . htmlspecialchars($crrentdate) . "\\nTime: " . htmlspecialchars($currantTime) . "\\nEmail: " . htmlspecialchars($email) . "');
                location.replace('Event_organize.php');
            </script>";
        } else {
            echo "Error: " . mysqli_error($connect);
        }
        mysqli_stmt_close($stmt3);
    } else {
        echo "Email already exists for name: " . htmlspecialchars($name);
    }
} else {
    echo "No record found for name: " . htmlspecialchars($name);
}

mysqli_stmt_close($stmt1);
mysqli_close($connect);
?>
