    
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
                    <a href="#Attendance"><i class="fa fa-fw fa fa-question-circle"></i> Attendance</a>
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
                                        <input type="text" name="time" required><select name="AM_PM" ><option value="AM">AM</option><option value="PM">PM</option></select>
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
                    <div class="detatil">
                        <Center>
                        <h1>Mark attendance</h1><!-- this section get from internet--></Center>
                        <form id="attandence" method="post" action="attandendence.php">
                            <div id="data"></div>
                            <button type="submit" onclick=""> ok</button>
                        </form><Center>
                        <div class="container">
                            <div class="section">
                                <div id="my-qr-reader">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buffer" ></div>
                    
                        </Center>
                        
                        <script
                            src="https://unpkg.com/html5-qrcode">
                        </script>

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