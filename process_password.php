<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='change_password.php';
        header("location: login.php");
    }
    $_SESSION['cpage']="account";
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
      <?php include_once 'header.php'; ?>
      <div class="clr"></div>
    </div>
  </div>
    <div class="content">
        <div class="content_resize">    
            <div class="mainbar">
                <div class="article">
                    <?php
                        $current=$_POST['current'];
                        $password=$_POST['password'];
                        $consumer_id=$_SESSION['consumer_id'];
                        $query="select * from user where consumer_id='$consumer_id' and password='$current'";
                        $qry=mysqli_query($conn,$query);
                        $num=mysqli_num_rows($qry);
                        if($num!==1)
                        {
                            $_SESSION['wrong_current']='error';
                            header("location:change_password.php");
                        }
                        else
                        {
                            $query1="update user set password='$password' where consumer_id='$consumer_id'";
                            $qry1=mysqli_query($conn,$query1);
                            if($qry1)
                            { ?>
                    <h1>Success!</h1>Password changed successfully.<br><br>Go Back to your <a href="loggedin.php">Account</a>.
                            <?php }
                            else
                                echo 'Not successful.';
                        }
                    ?>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>
</body>
</html>