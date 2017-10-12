<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='complaint.php';
        header("location: login.php");
    }
    $_SESSION['cpage']="support";
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
            $ack_no=  rand(111111111,999999999);
            $consumer_id=$_SESSION['consumer_id'];
            $name=$_SESSION['name'];
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            $type=$_POST['type'];
            $details=$_POST['details'];
            $date="20".date("y-m-d");
            $status="in queue";
            $query="INSERT INTO complaints VALUES ('$ack_no','$consumer_id','$name','$email','$mobile','$type','$details','$date','$status')";
            $qry=mysqli_query($conn,$query);
            if($qry)
            {
                $to = $email;
                $subject = "JKPDD Complaint";
                $content= "Dear $name,\r\n \r\nWe have registered your complaint under acknowledgement number: $ack_no for Consumer ID: $consumer_id \r\nPlease use the acknowledgement number to check your complaint status.";
                $headers = "From:project.test.php.iitm@gmail.com\r\n";
                if(mail($to,$subject,$content,$headers))
                {
                    echo "<h1>Thank You!</h1><br>"."<font size='4'>Your complaint has been reistered. We will call you back at the earliest.<br>Keep the acknowledgement number for future use.";
                    echo "<br><br>Acknowledgment No. :".$ack_no."</font>";
                }
                else
                    echo "Mail not sent";
            }
            else
                {
                echo "<h1>Error!</h1><br><font size='4'>Go Back to Previous Page</font>";
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