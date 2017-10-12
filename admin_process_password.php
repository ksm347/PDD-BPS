<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    $_SESSION['cpage']='account';
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
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">        
      <?php include_once 'admin_header.php'; ?>
      <div class="clr"></div>
    </div>
  </div>
    <div class="content">
        <div class="content_resize">
            <div class="article">
                <?php
                    $current=$_POST['current'];
                    $password=$_POST['password'];
                    $admin_id=$_SESSION['admin_id'];
                    $query="select * from admin where admin_id='$admin_id' and password='$current'";
                    $qry=mysqli_query($conn,$query);
                    $num=mysqli_num_rows($qry);
                    if($num!==1)
                    {
                        $_SESSION['wrong_current']='error';
                        header("location:admin_password.php");
                    }
                    else
                    {
                        $query1="update admin set password='$password' where admin_id='$admin_id'";
                        $qry1=mysqli_query($conn,$query1);
                        if($qry1)
                        { ?>
                <h1>Success!</h1>Password changed successfully.<br><br>Go Back to <a href="admin_loggedin.php">Admin</a> home page.
                        <?php }
                        else
                            echo 'Not successful.';
                    }
                ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>