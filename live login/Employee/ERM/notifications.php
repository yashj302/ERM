<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../../login/main_login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Notification</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a class="simple-text">
					Employee Panel
				</a>
			</div>

	    	<div class="sidebar-wrapper">
				 <ul class="nav">
	               
                    
                    <li>
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                
                    
                    <li>
	                    <a href="user.php">
	                        <i class="material-icons">person</i>
	                        <p>Co-Workers</p>
	                    </a>
					</li>
                    
					
                    
                    <li>
							<a href="add_client.php">
								<i class="material-icons">client</i>
								<p>Add Client</p>
							</a>
					</li>
					
                    
                    <li>
							<a href="Client_Details.php">
								<i class="material-icons">client</i>
								<p>Client Details</p>
							</a>
					</li>
	               
                    
                    
                    
                    <!--
Dashboard
User Profile
Edit Profile
Add Client
Client Details
About Us
Notifications
Chat Bot

-->
                    
                    
	                <li>
	                    <a href="aboutus.php">
	                        <i class="material-icons">C</i>
	                        <p>About Us</p>
	                    </a>
	                </li>
	               <!--<li>
	                    <a href="Email.html">
	                        <i class="material-icons">person</i>
	                        <p>Send Email</p>
	                    </a>
					</li>
                    -->
	                <li class="active">
	                    <a href="notifications.php">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>
                    
				
	            </ul>
                

	    	</div>
	    </div>

	    <div class="main-panel">
			
            
            
            <?php 
include"topbar.php";
?>
            
            

	        <div class="content">
	            <div class="container-fluid">
	                <div class="card">
	                    <div class="card-header" data-background-color="purple">
	                        <h4 class="title">Notifications</h4>
	                        <p class="category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p>
	                    </div>
	                    <div class="card-content">
	                        <div class="row">
	                            <div class="col-md-6">
	                                <h5>Notifications Style</h5>
	                                <div class="alert alert-info">
	                                    <span>This is a plain notification</span>
	                                </div>
	                                <div class="alert alert-info">
	                                    <button type="button" aria-hidden="true" class="close">×</button>
	                                    <span>This is a notification with close button.</span>
	                                </div>
	                                <div class="alert alert-info alert-with-icon" data-notify="container">
	                                    <button type="button" aria-hidden="true" class="close">×</button>
	                                    <i data-notify="icon" class="material-icons">add_alert</i>
	                                    <span data-notify="message">This is a notification with close button and icon.</span>
	                                </div>
	                                <div class="alert alert-info alert-with-icon" data-notify="container">
	                                    <button type="button" aria-hidden="true" class="close">×</button>
	                                    <i data-notify="icon" class="material-icons">add_alert</i>
	                                    <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <h5>Notification states</h5>
	                                <div class="alert alert-info">
	                                    <button type="button" aria-hidden="true" class="close">×</button>
	                                    <span><b> Info - </b> This is a regular notification made with ".alert-info"</span>
	                                </div>
	                                <div class="alert alert-success">
	                                    <button type="button" aria-hidden="true" class="close">×</button>
	                                    <span><b> Success - </b> This is a regular notification made with ".alert-success"</span>
	                                </div>
	                                <div class="alert alert-warning">
	                                    <button type="button" aria-hidden="true" class="close">×</button>
	                                    <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
	                                </div>
	                                <div class="alert alert-danger">
	                                    <button type="button" aria-hidden="true" class="close">×</button>
	                                    <span><b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
	                                </div>
									<div class="alert alert-primary">
	                                    <button type="button" aria-hidden="true" class="close">×</button>
	                                    <span><b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
	                                </div>
	                            </div>
	                        </div>

	                        <br>
	                        <br>

	                        <div class="places-buttons">
	                            <div class="row">
	                                <div class="col-md-6 col-md-offset-3 text-center">
	                                    <h5>Notifications Places
	                                        <p class="category">Click to view notifications</p>
	                                    </h5>
	                                </div>
	                            </div>
	                            <div class="row">
									<div class="col-md-8 col-md-offset-2">
										<div class="col-md-4">
		                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
		                                </div>
		                                <div class="col-md-4">
		                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
		                                </div>
		                                <div class="col-md-4">
		                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
		                                </div>
									</div>
	                            </div>
	                            <div class="row">
									<div class="col-md-8 col-md-offset-2">
										<div class="col-md-4">
		                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
		                                </div>
		                                <div class="col-md-4">
		                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
		                                </div>
		                                <div class="col-md-4">
		                                    <button class="btn btn-primary btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
		                                </div>
									</div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	       
	    </div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
