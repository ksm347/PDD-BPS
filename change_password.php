<?php
    session_start();
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='change_password.php';
        header("location: login.php");
    }
    $_SESSION['cpage']="account";
?>
<html>
<head>
<title>JKPDD</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="css/form-1.css"/>
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
          <div class="article" style="background-color: #718294; border: groove #718294; border-radius: 20px;">
            <font color="#ffffff" size="4">Logged in as: <?php echo $_SESSION['name'].' ('; echo $_SESSION['consumer_id'].')'; ?></font>
        </div>
        <div class="article">
            <form class='form-1' action="process_password.php" method="POST" onsubmit="return checkForm(this);">
            <table>
                <tr>
                    <th colspan="2" align="center"> CHANGE PASSWORD </th>
                </tr>
                <tr>
                    <td height="40">Current Password: &nbsp;</td>
                    <td>&nbsp;&nbsp;<input type="password" name="current" required>&nbsp;* <font color='red'><?php if(isset($_SESSION['wrong_current'])) { echo "Invalid Password"; unset($_SESSION['wrong_current']); } ?></font></td>
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
        </div>
      <?php
        include 'sidebar.html';
      ?>
      <div class="clr"></div>
    </div>
  </div>
  <?php include_once 'footer.php'; ?>
</div>
</body>
</html>
