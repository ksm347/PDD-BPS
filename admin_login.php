<?php
    session_start();
    if(isset($_SESSION['consumer_id']))
        header('location:need.php');
    if(isset($_SESSION['admin_id']))
        header('location:admin_loggedin.php');
    $_SESSION['cpage']='login';
?>
<html>
<head>
<title>JKPDD Admin</title>
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
      <?php include_once 'admin_header.php'; ?>
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
                if($_SESSION['message']==="error")
                {
                    echo '<font color=red><center>Login Unsuccessful. Invalid Username or Password</center><font>';
                    session_destroy();
                }
            }
            else
                echo '<br>';
            ?>
            <form class="form-3" action="admin_process_login.php" method="POST">
                <p>
                        <label for="login">Admin ID</label>
                        <input id="login" type="text" name="admin_id" placeholder="Admin ID" required>
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
        </section>
<!--Login Form Ends-->
</div>
    <div class="clr"></div>
<?php include_once 'admin_footer.php';?>
</div>
</body>
</html>