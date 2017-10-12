<?php
    session_start();
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    $_SESSION['cpage']="connect";
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
                <h1>Manage Connections</h1><hr>
                <form action="admin_process_new_connection.php" method="post">
                    <h2>Verify New Connection</h2>
                    <table>
                        <tr>
                            <td width="50%">Enter Acknowledgment Number:</td>
                            <td><input type="text" name="ack_no" maxlength="9" required></td>
                            <td><input type="submit" value="Continue"></td>
                        </tr>
                    </table>
                </form>
                <br>
                <hr>
                <h2>Temporary Deactivate / Activate Service</h2><font size="4">
                <div style="foat:left; width: 10px; height:20px;"><a href="admin_connection_deactivate.php">Deactivate</a></div>
                <div style="foat:right; width: 10px; height:20px;"><a href="admin_connection_activate.php">Activate</a></div></font>
            </div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>