<?php
    session_start();
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='complaintstatus.php';
        header("location: login.php");
    }
    $_SESSION['cpage']="support";
?>
<html>
<head>
    <title>JKPDD</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="css/form-1.css"/>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-ptsans.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script src="js/modernizr.custom.63321.js"></script>
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
            <h1>Complaint Status</h1>
            <form class="form-1" action="process_complaintstatus.php" method="POST">
            <table border=0>
                <tr>
                    <th colspan="2" align="center"> COMPLAINT STATUS </th>
                </tr>
                <tr>
                    <td align="right" height="40">Consumer Code: &nbsp;</td>
                    <td><input type="text" value="<?php echo $_SESSION['consumer_id']; ?>" disabled>*</td>
                </tr>
                <tr>
                    <td align="right" height="40">Acknowledgement Number: &nbsp;</td>
                    <td><input type="text" name="ack_no" maxlength="9" required onkeypress="return enterNumerics(this.id)">*</td>
                </tr>
                <tr>
                    <td colspan="2" align="center" height="24">
                        <input type="submit" value="Search">
                        <input type="button" value="Reset">
                        <input type="button" value="Cancel">
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
</body>
</html>
