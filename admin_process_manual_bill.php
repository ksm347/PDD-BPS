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
                    $con_id=$_POST['con_id'];
                    $amount=$_POST['amount'];
                    $payment_id=  rand(111111111,999999999);
                    $method="Manual";
                    $source=$_POST['source'];
                    $date="20".date("y-m-d");
                    $qry_ret=  mysqli_query($conn,"select * from unpaid where consumer_id='$con_id'");
                    if($qry_ret)
                    {
                        $row_ret=  mysqli_fetch_array($qry_ret);
                        $amt=$row_ret['amount'];
                        $unpaid=$amt-$amount;
                        $qry_up=  mysqli_query($conn,"update unpaid set amount='$unpaid' where consumer_id='$con_id'");
                        if($qry_up)
                        {
                            $query_ph="INSERT INTO payment_history VALUES ('$payment_id','$con_id','$amount','$method','$source','$date')";
                            $qry_ph=  mysqli_query($conn,$query_ph);
                ?>
                <h1>Success!</h1><br>Payment of Rs.<?php echo $amount; ?> received successfully for Consumer ID: <?php echo $con_id; ?>. Remaining amount: <?php echo $unpaid; ?> will be added to your next amount.<br><br>Payment ID:<?php echo $payment_id; ?>
                <?php } 
                else {?>
                <h1>Fail!</h1><br>Payment not completed. Please try again later.
                    <?php } } ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>