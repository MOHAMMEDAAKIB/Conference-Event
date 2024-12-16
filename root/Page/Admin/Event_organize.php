    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin control panal</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../../Style/Admin_Style.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            
        </div>



        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#organize" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> organize </a>
                </li>
                <li>
                    <a href="#about" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  about </a>
                </li>
                <li>
                    <a href="#Schedule"><i class="fa fa-fw fa-user-plus"></i>  Schedule</a>
                </li>
                <li>
                    <a href="#Speakers"><i class="fa fa-fw fa-paper-plane-o"></i>Speakers</a>
                </li>
                <li>
                    <a href="../attandence"><i class="fa fa-fw fa fa-question-circle"></i> Attendance</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
             <section id="organize">
                <div class="row" id="main" >
                    <section id="organize">
                        <div class="buffer"></div>
                            <div class="detatil">
                                <h1>Event Details</h1>
                                <div class="Db_fach">
                                    <p>Total participants:</p>
                                    <p>Available sheets: 500 </p>
                                    <p>Remaining Days: 4</p>
                                </div>
                                <button>Add</button>
                            </div>
                </section>
                <section id="about" style="  background-color: #FFFAFA;">
                    <div class="about_Event" >
                        <div class="buffer"></div>
                        <h2>About Event</h2> 
                            <form action="delete.php" method="post"style=" align-items: right;">
                                <button type="submit" style=" align-items: right; background-color:rgb(245, 115, 115);">Reset</button>
                            </form>
                            <form method="post" action="about.php" enctype="multipart/form-data">
                                <label for="bigPara">About the Event:</label></br>
                                <textarea id="bigPara" name="bigPara" rows="6" cols="50"></textarea></br></br>
                                <label>Place</label></br>
                                <input type="text" name="plase" placeholder="Javits Center – 655 West 34th Street, New York, NY 10001"style="width:450px;"></br></br>
                                <label>Date</label></br>
                                <input type="text" name="Date" placeholder="10-13 December, 2018 Monday to Tuesday"style="width:400px;"></br></br></br>
                                <input type="submit" name="submit" value="save" style="display: inline-block; background-color:rgb(115, 171, 245);">
                            </form>
                    </div>
                </section>
                <section id="Schedule" style="  background-color: #FFFAFA;">
                    <div class="event_form">
                        <h2>Event Schedule</h2>            
        
                            <label> mosly five days only Event Schedule</label>
                            <form action="deletShadul.php" method="post"style=" align-items: right;">
                                <button type="submit" style=" align-items: right;   background-color:rgb(245, 115, 115);">Reset</button>
                            </form>
                                <div class="Day1">    
                                    <form method="post" action="Day/Day1.php" enctype="multipart/form-data">
                                        <h3>Day 1</h3>
                                        <label for="time"> Time:</label>
                                        <input type="text" name="time" required><select name="AM_PM" required><option value="AM">AM</option><option value="PM">PM</option></select>
                                        <label for="Event_title">Event title:</label>
                                        <input type="text" name="Event_title"required>

                                        <label for="Speker_name">speeker Name:</label>
                                        <input type="text" name="Speker_name"required>
                                        <input type="submit" name="submit" value="save" style="  background-color:rgb(115, 171, 245);">
                                    </form>
                                </div>
                                <div class="Day2">
                                    <form method="post" action="Day/Day2.php" enctype="multipart/form-data">
                                        <h3>Day 2</h3>
                                        <label for="time"> Time:</label>
                                        <input type="text" name="time"><select ><option value="AM">AM</option><option value="PM">PM</option></select>
                                        <label for="Event_title">Event title:</label>
                                        <input type="text" name="Event title">

                                        <label for="Speker_name">speeker Name:</label>
                                        <input type="text" name="position">
                                        <input type="submit" name="submit" value="save" style="  background-color:rgb(115, 171, 245);">
                                    </form>
                                </div>
                                <div class="Day3">
                                    <form method="post" action="Day/Day3.php" enctype="multipart/form-data">
                                        <h3>Day 3</h3>
                                        <label for="time"> Time:</label>
                                        <input type="text" name="time"><select ><option value="AM">AM</option><option value="PM">PM</option></select>
                                        <label for="Event_title">Event title:</label>
                                        <input type="text" name="Event title">

                                        <label for="Speker_name">speeker Name:</label>
                                        <input type="text" name="position">
                                        <input type="submit" name="submit" value="save" style="  background-color:rgb(115, 171, 245);">
                                    </form>

                                </div>
                                <div class="Day4">
                                    <form method="post" action="Day/Day4.php" enctype="multipart/form-data">
                                        <h3>Day 4</h3>
                                        <label for="time"> Time:</label>
                                        <input type="text" name="time"><select ><option value="AM">AM</option><option value="PM">PM</option></select>
                                        <label for="Event_title">Event title:</label>
                                        <input type="text" name="Event title">

                                        <label for="Speker_name">speeker Name:</label>
                                        <input type="text" name="position">
                                        <input type="submit" name="submit" value="save" style="  background-color:rgb(115, 171, 245);">
                                    </form>

                                </div>
                                <div class="Day5">
                                    <form method="post" action="evrnt_organize_form.php" enctype="multipart/form-data">
                                        <h3>Day 5</h3>
                                        <label for="time"> Time:</label>
                                        <input type="text" name="time"><select ><option value="AM">AM</option><option value="PM">PM</option></select>
                                        <label for="Event_title">Event title:</label>
                                        <input type="text" name="Event_title">

                                        <label for="Speker_name">speeker Name:</label>
                                        <input type="text" name="position">
                                        <input type="submit" name="submit" value="save" style="  background-color:rgb(115, 171, 245);">
                                    </form>

                                </div>
                     </div>    
                </section>
                <section id="Speakers" style="  background-color: #FFFAFA;">
                    <div class="speeker_update">
                        <div class="head">
                            <h2>Speekers</h2>  
                        </div>
                        <div class="buffer" ></div>
                            <form action="deletspeeker.php" method="post"style=" align-items: right;">
                                <button type="submit" style=" align-items: right;   background-color:rgb(245, 115, 115);">Reset</button>
                            </form> </br>  </br>       
                            <form method="post" action="Event_organize.php" enctype="multipart/form-data"> 
                                    <label for="Name">Name of the Speeker:</label>
                                    <input type="text" name="Name"></br></br>

                                    <label for="speekerImage">Uplod profile photo</label></br></br>
                                    <input type="file" name="speekerImage"></br></br>

                                    <label for="position">speeker position:</label>
                                    <input type="text" name="position">
                                    <input type="submit" name="submit" value="save" style="  background-color:rgb(115, 171, 245);">
                            </form> 
                    </div>  
                </section> 
                <section id="Attendance"> 
                    <center>
                    <div class="detatil" Style="  padding-top:6%;">
                        <h1>Mark attendance</h1>
                        <div class="qrCodeView">      
                        <input type="file" accept="image/*" id="fileInput" hidden>
                    
                        <div id="qr-reader" style="width: 48%; display: none;"></div>
                        <video id="qrVideo" style="display: none;" autoplay></video>
                        
                        <!-- Icon Group for Upload and Scan -->
                        <div class="iconGroup">
                            <!-- Upload Icon -->    
                            <i class="bi bi-upload" onclick="document.getElementById('fileInput').click();" title="Upload QR Code">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                                </svg>
                            </i>
                            
                            <!-- QR Code Scan Icon -->
                            <i class="bi bi-qr-code-scan" title="Scan QR Code" onclick="window.location.replace('qrreader.php')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-qr-code-scan" viewBox="0 0 16 16">
                                    <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5M.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5M4 4h1v1H4z"/>
                                    <path d="M7 2H2v5h5zM3 3h3v3H3zm2 8H4v1h1z"/>
                                    <path d="M7 9H2v5h5zm-4 1h3v3H3zm8-6h1v1h-1z"/>
                                    <path d="M9 2h5v5H9zm1 1v3h3V3zM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8zm2 2H9V9h1zm4 2h-1v1h-2v1h3zm-4 2v-1H8v1z"/>
                                    <path d="M12 9h2V8h-2z"/>
                                </svg>
                            </i>
                        </div>
                    </div></center>
                        <script src="../../Script/scannerscript.js"></script>
                </section>       
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<?php 
    if (isset($_POST['submit'])) {
        if (isset($_FILES['speekerImage'])) {
            // Validate upload errors
            if ($_FILES['speekerImage']['error'] !== UPLOAD_ERR_OK) {
                echo "File upload error: " . $_FILES['speekerImage']['error'];
                exit();
            }

            // Check for empty tmp_name and validate the image
            if (!empty($_FILES['speekerImage']['tmp_name']) && getimagesize($_FILES['speekerImage']['tmp_name']) !== false) {
                // Collect form inputs
                $name = $_POST['Name'];
                $position = $_POST['position'];
                $img_tmp_path = $_FILES['speekerImage']['tmp_name'];
                $img_name = basename($_FILES['speekerImage']['name']);

                $image_data = file_get_contents($img_tmp_path);

                // Connect to the database
                $connect = mysqli_connect('localhost', 'root', '', 'event_managment_DB');
                if (!$connect) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Prepare the SQL query
                $sql = "INSERT INTO `speeker` (Name, IMG_NAME, Images, Position) VALUES (?, ?, ?, ?)";
                $stmt = $connect->prepare($sql);
                $stmt->bind_param("ssss", $name, $img_name, $image_data, $position);

                if ($stmt->execute()) {
                    echo "Image and data stored successfully.";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
                mysqli_close($connect);
            } else {
                echo "Please upload a valid image file.";
            }
        } else {
            echo "No file uploaded. Please try again.";
        }
    }

?>  
  

</body>
</html>