<?php
    session_start();
    $_SESSION['cpage']="home";
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
        <div class="article">
          <h2><span>Jammu And Kashmir Power Development Department</span></h2>
          <div class="clr"></div>
          <div class="img"><img src="images/jkpdd_logo.jpg" width="179" height="150" alt="" class="fl" /></div>
          <div class="post_content">
              <p>Power Development Department (PDD) is one of the Department of Jammu & Kashmir State Government responsible for all functions related to transmission and distribution of electric power in the state. The generation sector is looked after by J &amp; K State Power Development Corporation (JKSPDC), which was carved out of PDD in the year 1995.</p>
            <p>Jammu and Kashmir State comprises of three geographically and climatically distinct regions viz; Arctic cold desert areas of Ladakh, temperate Kashmir Valley and subtropical region of Jammu.</p>
          </div>
          <div class="clr"></div>
        </div>
          <table id="main_table">
              <tr align="center">
                  <td>Pay Your Bill Here<br><a href="billpayment.php"><img src="images/paybill.png"></a></td>
                  <td>Not Signed Up?<br><a href="signup.php"><img src="images/signup.png"></a></td>
              </tr>
              <tr align="center">
                  <td>Got a Complaint?<br><a href="complaint.php"><img src="images/complaints.png"></a></td>
                  <td>Everything Else<br><a href="downloads.php"><img src="images/downloads.png"></a></td>
              </tr>
          </table>
      </div>
      <?php include'sidebar.html'; ?>
      <div class="clr"></div>
    </div>
  </div>
  <?php include_once 'footer.php';?>
  </div>
</html>