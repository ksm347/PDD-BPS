<?php
    session_start();
    if(!isset($_SESSION['consumer_id']))
    {
        header("location: login.php");
    }
    $_SESSION['cpage']="account";
    include_once 'database_connect.php';
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
      <div class="slider">
        <div id="coin-slider"><a href="#"><img src="images/slide1.jpg" width="960" height="313" alt="" /></a> <a href="#"><img src="images/slide2.jpg" width="960" height="313" alt="" /></a> <a href="#"><img src="images/slide3.jpg" width="960" height="313" alt="" /></a></div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article" style="background-color: #718294; border: groove #718294; border-radius: 20px;">
            <font color="#ffffff" size="4">Logged in as: <?php echo $_SESSION['name'].' ('; echo $_SESSION['consumer_id'].')'; ?></font>
        </div>
        <div class="article">
            <img src="images/history-icon.png" height="20" width="20">&nbsp;&nbsp;&nbsp;<a href="usagehistory.php"><font color="black"><b>Usage History</b></font></a>
        </div>
        <div class="article">
            <img src="images/payment-icon.png" height="20" width="20">&nbsp;&nbsp;&nbsp;<a href="paymenthistory.php"><font color="black"><b>Payments History</b></font></a>
        </div>
        <div class="article">
            <?php
                $consumer_id=$_SESSION['consumer_id'];
                $qry1=mysqli_query($conn,"select amount from unpaid where consumer_id=$consumer_id");
                $row=mysqli_fetch_array($qry1);
                $n1= $row['amount'];
            ?>
            <img src="images/bill-icon.png" height="20" width="20">&nbsp;&nbsp;&nbsp;<a href="billpayment.php"><font color="black"><b>Bill Payment</b></font><div class="notif">Rs. <?php echo $n1; ?></div></a>
        </div>
        <div class="article">
            <?php
                $qry1=mysqli_query($conn,"select * from service where consumer_id=$consumer_id and status=0");
                $n1=  mysqli_num_rows($qry1);
            ?>
            <img src="images/service-icon.jpg" height="20" width="20">&nbsp;&nbsp;&nbsp;<a href="service.php"><font color="black"><b>Turn Service ON/OFF</b></font><div class="notif" style="background-color:rgba(<?php if($n1) echo "256,0,"; else echo "0,256,"?>0,0.3); width:10px;">&nbsp;</div></a>
        </div>
        <!--div class="article">
            <img src="images/call-icon.jpg" height="20" width="20">&nbsp;&nbsp;&nbsp;<a href=""><font color="black"><b>Call Our Service Centre</b></font></a>
        </div-->
        <div class='clr'></div>
      </div>
      <?php
        include'sidebar.html';
      ?>
      <div class="clr"></div>
    </div>
  </div>
  <?php include_once 'footer.php'; ?>
  </div>
</body>
</html>