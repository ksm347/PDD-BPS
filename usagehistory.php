<?php    
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='usage_history.php';
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
            <h1>Usage History</h1>
            <?php
                $consumer_id=$_SESSION['consumer_id'];
                $result_uh=mysqli_query($conn,"select * from usage_history where consumer_id = '$consumer_id'");
                $result_bh=mysqli_query($conn,"select * from bill_history where consumer_id = '$consumer_id'");
                $row_uh=mysqli_fetch_array($result_uh);
                $row_bh=mysqli_fetch_array($result_bh);
            ?>
                <table border="1">
                    <tr>
                        <th>Months</th>
                        <th>Units Consumed</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <th>November(2014)</th>
                        <td><?php if(!is_null($row_uh['nov_2014'])) echo $row_uh['nov_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['nov_2014'])) echo $row_bh['nov_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>October(2014)</th>
                        <td><?php if(!is_null($row_uh['oct_2014'])) echo $row_uh['oct_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['oct_2014'])) echo $row_bh['oct_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>September(2014)</th>
                        <td><?php if(!is_null($row_uh['sep_2014'])) echo $row_uh['sep_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['sep_2014'])) echo $row_bh['sep_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>August(2014)</th>
                        <td><?php if(!is_null($row_uh['aug_2014'])) echo $row_uh['aug_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['aug_2014'])) echo $row_bh['aug_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>July(2014)</th>
                        <td><?php if(!is_null($row_uh['jul_2014'])) echo $row_uh['jul_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['jul_2014'])) echo $row_bh['jul_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>June(2014)</th>
                        <td><?php if(!is_null($row_uh['jun_2014'])) echo $row_uh['jun_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['jun_2014'])) echo $row_bh['jun_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>May(2014)</th>
                        <td><?php if(!is_null($row_uh['may_2014'])) echo $row_uh['may_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['may_2014'])) echo $row_bh['may_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>April(2014)</th>
                        <td><?php if(!is_null($row_uh['apr_2014'])) echo $row_uh['apr_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['apr_2014'])) echo $row_bh['apr_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>March(2014)</th>
                        <td><?php if(!is_null($row_uh['mar_2014'])) echo $row_uh['mar_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['mar_2014'])) echo $row_bh['mar_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>February(2014)</th>
                        <td><?php if(!is_null($row_uh['feb_2014'])) echo $row_uh['feb_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['feb_2014'])) echo $row_bh['feb_2014']; ?></td>
                    </tr>
                    <tr>
                        <th>January(2014)</th>
                        <td><?php if(!is_null($row_uh['jan_2014'])) echo $row_uh['jan_2014']; ?></td>
                        <td><?php if(!is_null($row_bh['jan_2014'])) echo $row_bh['jan_2014']; ?></td>
                    </tr>
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
<?php include_once 'footer.php'; ?>
</div>
</html>