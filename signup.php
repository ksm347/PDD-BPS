<?php
    session_start();
    if(isset($_SESSION['consumer_id']))
    {
        header("location: need.php");
    }
    $_SESSION['cpage']="account";
?>
<html>
<head>
    <title>JKPDD</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
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
            <form class='form-1' action="process_signup.php" method="POST" onsubmit="return checkForm(this);">
            <table border="0">
                <tr>
                    <th colspan="2" align="center" bgcolor="#232528"> SIGN UP </th>
                </tr>
                <tr>
                    <td>Consumer ID: &nbsp</td>
                    <td>&nbsp&nbsp<input type="text" name='consumer_id' id="consumer_id" placeholder="ID" required maxlength="13" onkeypress="return enterNumerics(event,this.id);">*</td>
                </tr>
                <tr>
                    <td>Name(as on Bill): &nbsp</td>
                    <td>&nbsp&nbsp<input type="text" name='name' id="name" placeholder="Name" required maxlength="40" onkeypress="return enterAlpha(event,this.id);">*</td>
                </tr>
                <tr>
                    <td>New Password: &nbsp</td>
                    <td>&nbsp&nbsp<input type="password" name="password" placeholder="Password" required maxlength="20" pattern=".{6,}" title="Min. 6 characters">*</td>
                </tr>
                <tr>
                    <td>Confirm Password: &nbsp</td>
                    <td>&nbsp&nbsp<input type="password" name="confirm" placeholder="Confirm Password" required maxlength="20">*</td>
                </tr>
                <tr>
                    <td>Email Id: &nbsp</td>
                    <td>&nbsp&nbsp<input type="email" name="email" placeholder="E-mail" required  maxlength="40">*</td>
                </tr>
                <tr>
                    <td colspan="2" align="center" height="24">
                        <input type="submit" value="Submit"></td></tr>
                <tr>
                    <td colspan="2" align="center" height="24">
                        <input type="button" value="Reset">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center" height="24">All fields marked with (*) are mandatory</td>
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
  <?php include_once 'footer.php';?>
</div>
</html>