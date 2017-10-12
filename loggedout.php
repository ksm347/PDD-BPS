<?php
    require_once 'database_connect.php';
    session_start();
    $_SESSION['cpage']='login';
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
        <?php include_once 'header.php';?>
      <div class="clr"></div>
    </div>
  </div>
    <div class="content">
        <div class="content_resize">    
            <div class="mainbar">
                <div class="article">
                    <h1>Logged Out</h1>
                    <br>
                    <font size="4">You have been successfully logged out of your account.
                    <br><br>Click <a href="index.php">Home</a> to continue or <a href="login.php">Login</a> to continue.</font>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>
</body>
</html>