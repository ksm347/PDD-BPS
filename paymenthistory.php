<?php    
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='paymenthistory.php';
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
          <div class="article" style="padding-right:60px;">
            <h1>Payment History</h1>
            <?php
                $consumer_id=$_SESSION['consumer_id'];
                $result=mysqli_query($conn,"select * from payment_history where consumer_id = '$consumer_id' ORDER BY date desc limit 10");
                
            ?>
                <table border="1">
                    <tr>
                        <th>Payment ID</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Source</th>
                        <th>Date</th>
                    </tr>
                    <?php while($row=mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['payment_id'];?></td>
                        <td><?php echo $row['amount'];?></td>
                        <td><?php echo $row['method'];?></td>
                        <td><?php echo $row['source'];?></td>
                        <td><?php echo $row['date'];?></td>
                    </tr><?php } ?>
                </table>
        </div>
        <div class='clr'></div>
      </div>
      <?php
        include'sidebar.html';
      ?>
      <div class="clr"></div>
    </div>
  </div>
  <?php include_once 'footer.php';?>
</div>
</html>