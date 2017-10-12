<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    $_SESSION['cpage']='admin';
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
                $username=$_POST['username'];
                $qry=0;
                if($username==='admin')
                {
                    die("Administrator can not delete own account.");
                }
                else
                {
                    $query="DELETE FROM admin where admin_id='$username'";
                    $qry=mysqli_query($conn,$query);
                }
                if($qry)
                {
                ?>
                Admin ID: <?php echo $username; ?> Successfully Deleted.<br><a href="admin_delete.php">Deleted another member.</a> OR <a href="admin_loggedin.php">Go Admin Home</a>
                <?php
                }
                else
                    echo "Not Successful";
                ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>