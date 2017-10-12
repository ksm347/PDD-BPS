<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='billpayment.php';
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
            $payment_id=  rand(111111111,999999999);
            $consumer_id=$_SESSION['consumer_id'];
            $name=$_SESSION['name'];
            $email=$_SESSION['email'];
            $amount=$_POST['amount'];
            if(isset($_POST['method']) AND isset($_POST['source']) AND $amount>0)
            {
                $method=$_POST['method'];
                $source=$_POST['source'];
            }
            else
                die("Error.<br>Please go back and enter a valid value.");
            $date="20".date("y-m-d");
            $qry_ret=  mysqli_query($conn,"select * from unpaid where consumer_id='$consumer_id'");
            if($qry_ret)
            {
                $row_ret=  mysqli_fetch_array($qry_ret);
                $amt=$row_ret['amount'];
                $unpaid=$amt-$amount;
                $qry_up=  mysqli_query($conn,"update unpaid set amount='$unpaid' where consumer_id='$consumer_id'");
                if($qry_up)
                {
                    $query="INSERT INTO payment_history VALUES ('$payment_id','$consumer_id','$amount','$method','$source','$date')";
                    $qry=mysqli_query($conn,$query);
                    if($qry)
                    {
                        echo "<h2>Thank You!</h2><br>"."Your payment has been received.";
                        echo "<br><br>Payment ID :".$payment_id;
                        $to = $email;
                        $subject = "JKPDD Bill Payment";
                        $content= "Dear $name,\r\n \r\nYour transaction of Rs. $amount on JKPDD website for Consumer ID: $consumer_id through $source was successful. Your Payment ID is : $payment_id.";
                        $headers = "From:project.test.php.iitm@gmail.com\r\n";
                        if(mail($to,$subject,$content,$headers))
                        {
                            echo "";
                        }
                        else
                            echo "Mail not sent";
                    }
                    else
                    {
                        echo "<h1>Error!</h1><br><font size='4'>Your Transaction was not possible.<br>Kindly try again later.</font>";
                    }
                }
            }
        ?>             
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>
</body>
</html>