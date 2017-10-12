<?php
    session_start();
    require_once 'database_connect.php';
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
    </div>
  </div>
    <div class="content">
        <div class="content_resize">    
            <div class="mainbar">
                <div class="article">
        <?php
            $consumer_id=$_SESSION['consumer_id'];
            $end_date=$_POST['end_date'];
            $start_date=$_POST['start_date'];
            $query1= mysqli_query($conn,"select * from service where consumer_id='$consumer_id'");
            if(mysqli_num_rows($query1)!==0)
            {
                echo "<h1>Error</h1>";
                echo "<br><font size='4'>You already requested for service turn off with the Consumer ID: ".$consumer_id;
                echo "<br>Kindly return after the period is over.</font>";
                die();
            }
            else
                $query2= mysqli_query($conn,"insert into service (consumer_id, start_date,end_date) values ('$consumer_id','$start_date','$end_date')");
            if($query2)
            {
                echo "<h1>Thank You!</h1><br><font size='4'>Your service will be deativated between the period: "."$start_date"." to ".$end_date.".</font>";
            }
            else
                echo "error";
        ?>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>
    </body>
</html>