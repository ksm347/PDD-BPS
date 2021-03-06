<?php
    require_once 'database_connect.php';
    session_start();
    if(!isset($_SESSION['consumer_id']))
        header('location:index.php');
?>
<html>
<head>
<title>JKPDD</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-ptsans.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div id="top"></div>
<div class="main">
  <div class="header">
    <div class="header_resize">        
      <div class="logo">  
        <h1><a href="index.php"><span>Jammu Kashmir Power Development Department</span> <small>Save Electricity. Save World.</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="support.php">Support &#9662;</a>
                    <ul>
                        <?php if(!isset($_SESSION['consumer_id'])) {?><li><a href="register.php">New Connection</a></li><?php } ?>
                        <li><a href="complaint.php">Complaint</a></li>
                        <li><a href="complaintstatus.php">Complaint Status</a></li>
                    </ul>
                </li>
                <li><a href="about.php">About Us &#9662;</a>
                    <ul>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
           <?php
          if(isset($_SESSION['consumer_id']))
            {?>
                <li><a href='loggedin.php'><span>Account &#9662;</span></a>
                    <ul>
                        <li><a href="change_password.php"><i>Change Password</i></a></li>
                        <li><a href="logout.php"><i>Logout</i></a></li>
                    </ul>
                </li>
            <?php 
            }
          else 
            {?>
                <li><a href='login.php'><span>LogIn &#9662;</span></a>
                    <ul>
                        <li><a href="login.php"><i>LogIn</i></a></li>
                        <li><a href="signup.php"><i>Sign Up</i></a></li>
                        <li><a href="admin_login.php">Admin</a></li>
                    </ul>
                </li>
            <?php } ?>
            </ul>
      </div>
        
      <div class="clr"></div>
    </div>
  </div>
    <div class="content">
        <div class="content_resize">    
            <div class="mainbar">
                <div class="article">
                    <h1>Error</h1>
                    <br>
                    <font size=4>You need to <a href="logout.php">LogOut</a> to continue.<br>
                    Or Go Back.</font>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>
</body>
</html>