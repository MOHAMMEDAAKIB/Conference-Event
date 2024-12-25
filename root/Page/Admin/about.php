<?php                       
    $about = $_POST['bigPara'];
    $place = $_POST['plase'];
    $Date = $_POST['Date'];
    
    
    
    // Corrected the function name to `mysqli_connect`
    include ('conn.php');

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO about(about, plase, Date) VALUES('$about', ' $place', '$Date')";
    
    // Corrected the function name to `mysqli_query`
    $w = mysqli_query($conn, $sql);
    
    if ($w ) {
        echo "<script> alert('Saved successfully!');location.replace('Event_organize.php');</script>";
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
?>
