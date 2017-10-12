<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location:admin_login.php");
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
                <form class='form-1' action="admin_process_password.php" method="POST" onsubmit="return checkForm(this);">
                <table>
                    <tr>
                        <th colspan="2" align="center"> CHANGE PASSWORD </th>
                    </tr>
                    <tr>
                        <td height="40">Current Password: &nbsp;</td>
                        <td>&nbsp;&nbsp;<input type="password" name="current" required>&nbsp;* <font color='red'><?php if(isset($_SESSION['wrong_current'])) { echo "Invalid Password"; unset($_SESSION['wrong_current']); } else echo'&nbsp;'; ?></font></td>
                    </tr>
                    <tr>
                        <td height="40">New Password: &nbsp;</td>
                        <td>&nbsp;&nbsp;<input type="password" name="password" required pattern=".{6,}" title="Min. 6 characters">&nbsp;*</td>
                    </tr>
                    <tr>
                        <td height="40">Confirm Password: &nbsp;</td>
                        <td>&nbsp;&nbsp;<input type="password" name="confirm" required>&nbsp;*</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" height="24">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="reset"></td>
                    </tr>
                </table>
            </form>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>