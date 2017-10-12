<?php
    session_start();
    if(isset($_SESSION['admin_id']))
        header ('location:need.php');
    if(isset($_SESSION['consumer_id']))
        header('location:need.php');
	$_SESSION['cpage']='account';
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
<!--login links starts-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Custom Login Form"/>
<meta name="keywords" content="login" />
<meta name="author" content="Kamran" />
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script src="js/modernizr.custom.63321.js"></script>
<!--login links ends-->
<script type="text/javascript" src="js/if_fieldValidation.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <?php include_once 'header.php'; ?>
      <div class="clr"></div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
        <!--Login Form Starts-->
        <section class="maim">
            <?php
            if(isset($_SESSION['message']))
            {
                echo '<font color=red><center>Login Unsuccessful. Invalid Username or Password</center><font>';
                session_destroy();
            }
            else
                echo '<br>';
            ?>
            <form class="form-3" action="process_login.php" method="POST">
                <p>
                        <label for="login">Consumer ID</label>
                        <input id="login" type="text" name="consumer_id" placeholder="Consumer ID" maxlength="13" required onkeypress="return enterNumerics(event,this.id);" autofocus>
                </p>
                <p>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </p>
                <p>
                    
                </p>
                <p>
                    <input type="submit" name="submit" value="Sign in">
                </p>
            </form>
            <form class="form-3" action="signup.php" method="post" style="margin-top:-20px;">
                <p>
                    <label for="signup">Not an existing user?</label>
                    <button type="submit" name="signup"  style="float: right; margin-right: 15px;">Sign Up</button>
                </p>
            </form>
        </section>
<!--Login Form Ends-->
<div class="clr"></div>
</div>
</div>
</html>