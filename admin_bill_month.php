<?php
    session_start();
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    $_SESSION['cpage']='bill';
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
                <h2>Bill Entry</h2>
                Select the month to input usage data.
                    <form action="admin_billing.php" method="post">
                        <select name="month" required>
                            <option value="oct_2014">Oct 2014</option>
                            <option value="nov_2014">Nov 2014</option>
                            <option value="dec_2014">Dec 2014</option>
                            <option value="jan_2015">Jan 2015</option>
                            <option value="feb_2015">Feb 2015</option>
                            <option value="mar_2015">Mar 2015</option>
                        </select>
                        <input type="submit" value="Next">
                    </form>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>