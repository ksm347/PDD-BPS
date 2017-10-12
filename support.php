<?php
    session_start();
    $_SESSION['cpage']="support";
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
      <?php include_once 'header.php';?>
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
          <h2><span>Support to</span> Jammu and Kashmir Power Development Department</h2>
          <div class="clr"></div>
          <p>Here a consumer of JKPDD can register a complaint provided he is signed in to the website. Or if you have registered  complaint you can check its status using the complaint status option.</p><p>Or in case you are not a consumer of JKPDD, you can register yourself using the Register option.</p>
          <table id="main_table">
              <tr align="center">
                  <td>New Connection<br><a href="register.php"><img src="images/register.png"></a></td>
                  <td>Register Complaint<br><a href="complaint.php"><img src="images/complaints.png"></a></td>
                  <td>Complaint Status<br><a href="complaintstatus.php"><img src="images/tick.png"></a></td>
              </tr>
          </table>
        </div>
      </div>
      <?php include'sidebar.html'; ?>
      <div class="clr"></div>
    </div>
  </div>
  <?php  include_once 'footer.php'; ?>
</div>
</body>
</html>
