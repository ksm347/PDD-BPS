<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    $_SESSION['cpage']='admin';
    if(!isset($_POST['con_id']))
        header("location:admin_connection_deactivate.php");
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
                <h2>Deactivate Connections Temporarily.</h2>
                <?php
                    require 'database_connect.php';
                    $con_id=$_POST['con_id'];
                    $start_date=$_POST['start_date'];
                    $end_date=$_POST['end_date'];
                    $date="20".date("y-m-d");
                    if($date===$start_date)
                    {
                        $qry= mysqli_query($conn,"UPDATE service SET status='0' WHERE consumer_id=$con_id");
                        if($qry)
                            header("location:admin_connection_deactivate.php");
                    }
                    else { ?>
                ERROR!<br><br>Start Date early.<br>Please return on the correct start date.
                    <?php } ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>