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
<div id="top"></div>
<div class="main">
  <div class="header">
    <div class="header_resize">        
      <?php include_once 'admin_header.php'; ?>
      <div class="clr"></div>
    </div>
  </div>
    <div class="content">
        <div class="content_resize" style="height:400px">
            <div style="width:960px; height:110px; background-color:#718294; border-radius:10px 10px 0 0; z-index:1; position: absolute; color:#A3B0C1"><div style="float:right; margin-right:10px;">Logged in as:<?php echo $_SESSION['admin_id']; ?></div><h1 style="margin-left:20px">Welcome to JKPDD Management</h1></div>
            <div class="admin_article">
                <h3>Manage Members</h3>
                <a href="admin_new.php">Add New Member</a><br>
                <a href="admin_members.php">View Members</a><br>
                <a href="admin_delete.php">Delete Members</a><br>
                <h2>Administrators</h2>
            </div>
            <div class="admin_article">
                <h3>Manage Connections</h3>
                <?php
                    $date="20".date("y-m-d");
                    $qry1=  mysqli_query($conn,"select * from new_connection");
                    $n1=  mysqli_num_rows($qry1);
                    $qry3=  mysqli_query($conn,"select * from service where start_date='$date' and status='1'");
                    $n2=  mysqli_num_rows($qry3);
                    $qry2=  mysqli_query($conn,"select * from service where end_date='$date' and status='0'");
                    $n3=  mysqli_num_rows($qry2);
                ?>
                <a href="admin_connection.php">Verify New Connection<?php if($n1>0) { ?><div class="notif"><?php echo $n1; ?></div><?php } ?></a><br>
                <a href="admin_connection_deactivate.php">Deactivate Connection<?php if($n2>0) { ?><div class="notif"><?php echo $n2; ?></div><?php } ?></a><br>
                <a href="admin_connection_activate.php">Activate Connection<?php if($n3>0) { ?><div class="notif"><?php echo $n3; ?></div><?php } ?></a><br>
                <h2>Connection</h2>
            </div>
            <div class="admin_article">
                <h3>Manage Grievances</h3>
                <?php
                    $qry1=  mysqli_query($conn,"select * from complaints where status='in queue'");
                    $n1=  mysqli_num_rows($qry1);
                    $qry2=  mysqli_query($conn,"select * from complaints where status='under process'");
                    $n2=  mysqli_num_rows($qry2);
                    $qry3=  mysqli_query($conn,"select * from contact where status='pending'");
                    $n3= mysqli_num_rows($qry3);
                ?>
                <a href="admin_complaint.php">Complaints<?php if($n1>0) { ?><div class="notif"><?php echo $n1; ?></div><?php } ?></a><br>
                <a href="admin_complete_complaint.php">Finish Job<?php if($n2>0) { ?><div class="notif"><?php echo $n2; ?></div><?php } ?></a><br>
                <a href="admin_contact.php">Messages<?php if($n2>0) { ?><div class="notif"><?php echo $n3; ?></div><?php } ?></a><br>
                <h2>Grievances</h2>
            </div>
            <div class="admin_article">
                <h3>Manage Bills</h3><br>
                <a href="admin_bill_month.php">Bill Entry</a><br>
                <a href="admin_manual_bill.php">Manual Bill Collection</a><br>
                <h2>Billing</h2>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>