<?php
    session_start();
    require_once 'database_connect.php';
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
                <?php 
                    mysqli_query($conn,"SET AUTOCOMMIT=0");
                    mysqli_query($conn,"START TRANSACTION");
                    $month=$_SESSION['month'];
                    $con_id=$_POST['con_id'];
                    $unit=$_POST['unit'];
                    $qry_uh=  mysqli_query($conn,"update usage_history set $month='$unit' where consumer_id='$con_id'");
                    if(!$qry_uh) echo "error uh";
                    //
                    $qry_ret=mysqli_query($conn,"select * from consumer where consumer_id='$con_id'");
                    $row_ret=mysqli_fetch_array($qry_ret);
                    if($row_ret['purpose']==="Residential")
                    {
                        if($unit<30)
                            $bill=$unit*1.19;
                        else if($unit<100)
                        {
                            $unit=$unit-30;
                            $bill=$unit*1.65+35.7;
                        }
                        else if($unit<200)
                        {
                            $unit=$unit-100;
                            $bill=$unit*2.03+151.2;
                        }
                        else
                        {
                            $unit=$unit-200;
                            $bill=$unit*3.11+354.2;
                        }
                    }
                    else
                    {
                        if($unit<100)
                            $bill=$unit*2.31;
                        else if($unit<200)
                        {
                            $unit=$unit-100;
                            $bill=$unit*2.68+231;
                        }
                        else
                        {
                            $unit=$unit-200;
                            $bill=$unit*3.88+499;
                        }
                    }
                    //
                    $qry=mysqli_query($conn,"select $month from bill_history where consumer_id='$con_id'");
                    $row=  mysqli_fetch_array($qry);
                    $pre_unit=$row[$month];
                    $qry_bh=mysqli_query($conn,"update bill_history set $month='$bill' where consumer_id='$con_id'");
                    $bill=$bill-$pre_unit;
                    $qry=  mysqli_query($conn,"select amount from unpaid where consumer_id='$con_id'");
                    $row=  mysqli_fetch_array($qry);
                    $amount=$row['amount'];
                    $amount=$amount+$bill;
                    $qry_up=  mysqli_query($conn,"update unpaid set amount='$amount' where consumer_id='$con_id'");
                    if($qry_bh AND $qry_uh AND $qry_up)
                    {
                        mysqli_query($conn,"COMMIT");
                    ?>
                    Updation Successful.
                    <?php 
                    }
                    else
                    {
                        mysqli_query($conn,"ROLLBACK");
                    ?>
                    Unsuccessful.
                    <?php
                    }                        
                ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>