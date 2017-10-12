<?php
    session_start();
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='service.php';
        header("location: login.php");
    }
    $_SESSION['cpage']="account";
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
            <h2><span>Turn Service On/Off</span></h2>
            <div class="clr"></div>
            <div class="img"><img src="images/service-icon.jpg" class="f1"></div>
            <div class="post_content">
                <p>Now you can easily send a request to turn your service off temporarily, while you are out on a vacation or a business trip. It will save your electricity from illegal usage and unnecessary charges on your account.</p>
                <p>Once applied you can disable your electricity service for a minimum number of 15 days upto 180 days.</p>
                <p>One of our technicians will visit you on the day you want to turn the service Off and he will be there on the day your service is to be resumed.</p>
            </div>
          <div class="clr"></div>
          <div class="clr"></div>
          <div class="clr"></div>
          <div class="clr"></div>
        </div>
          <div class="article">
              <form class="form-1" action="process_service.php" method="POST">
                  <table>
                      <tr>
                          <td>Enter Start date of deactivation: </td>
                          <?php $today="20".date('y-m-d'); ?>
                          <td><input type="date" name="start_date" required min='<?php echo $today; ?>'></td>
                      </tr>
                      <tr>
                          <td>Enter End date of deactivation (min. 15 days difference): </td>
                          <?php?>
                          <td><input type="date" name="end_date" required min='<?php echo $today; ?>'></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><input type="submit"></td>
                      </tr>
                  </table>
              </form>
          </div>
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
</html>