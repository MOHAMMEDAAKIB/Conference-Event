<?php
    $seets = $_POST['initialseets'];

    include ('../../conn.php');

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO event_attandedence_detatil(avilable_seet) VALUES(' $seets')";
    
    // Corrected the function name to `mysqli_query`
    $w = mysqli_query($conn, $sql);
    
    if ($w ) {
        echo "<script> alert('Saved successfully!');location.replace('Event_organize.php');</script>";
    } else {
        echo "Error executing query: " . mysqli_error($conn);}




?>