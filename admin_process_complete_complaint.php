<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    $_SESSION['cpage']='complaint';
    if(!isset($_POST['con_id']))
        header("location:admin_complete_complaint.php");
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
                    $ack_no=$_POST['ack_no'];
                    $query_ret="update complaints set status='completed' where consumer_id='$con_id' and ack_no='$ack_no'";
                    $qry_ret=  mysqli_query($conn,$query_ret);
                    if($qry_ret)
                    {
                        $qrym=  mysqli_query($conn,"select * from consumer where consumer_id='$con_id'");
                        if($rowm=  mysqli_fetch_array($qrym))
                        {
                            $email=$rowm['email'];
                            $name=$rowm['name'];
                            $to = $email;
                            $subject = "JKPDD Complaint";
                            $content= "Dear $name,\r\n \r\nYour complaint registered with JKPDD with Acknowledgement No. $ack_no has been finished. Kindly contact us for further details.\r\n\r\nJKPDD Support.";
                            $headers = "From:project.test.php.iitm@gmail.com\r\n";
                            if(mail($to,$subject,$content,$headers))
                                echo "Mail Sent";
                            else
                                echo "Mail Not sent";
                        }
                    }
                    else
                        echo 'Error';
                ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>