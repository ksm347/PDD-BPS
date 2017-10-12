<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    $_SESSION['cpage']='connect';
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
                    if(!isset($_SESSION['ack_no']))
                        header("location:admin_connection.php");
                    $ack_no=$_SESSION['ack_no'];
                    unset($_SESSION['ack_no']);
                    $query="select * from new_connection where ack_no=$ack_no";
                    $qry=mysqli_query($conn,$query);
                    if(!mysqli_num_rows($qry))
                        die("Error");
                    $row=mysqli_fetch_array($qry);
                    $name=$row['name'];
                    $father_husband_trustee=$row['father_husband_trustee'];
                    $comm_address_line_1=$row['comm_address_line_1'];
                    $comm_address_line_2=$row['comm_address_line_2'];
                    $comm_city=$row['comm_city'];
                    $comm_pin=$row['comm_pin'];
                    $phone=$row['phone'];
                    $mobile=$row['mobile'];
                    $email=$row['email'];
                    $address_line_1=$row['address_line_1'];
                    $address_line_2=$row['address_line_2'];
                    $city=$row['city'];
                    $pin=$row['pin'];
                    $plot_size=$row['plot_size'];
                    $coverage=$row['coverage'];
                    $category=$row['category'];
                    $purpose=$row['purpose'];
                    $kw=$row['kw'];
                    $type=$row['type'];
                    $dedicated_line=$row['dedicated_line'];
                    $own_meter=$row['own_meter'];
                    mysqli_query($conn,"SET AUTOCOMMIT=0");
                    mysqli_query($conn,"START TRANCACTION");
                    $query1="INSERT INTO consumer (name, father_husband_trustee, comm_address_line_1, comm_address_line_2, comm_city, comm_pin, phone, mobile, email, address_line_1, address_line_2, city, pin, plot_size, coverage, category, purpose, kw, type, dedicated_line, own_meter, ack_no) VALUES ('$name','$father_husband_trustee','$comm_address_line_1','$comm_address_line_2','$comm_city','$comm_pin','$phone','$mobile','$email','$address_line_1','$address_line_2','$city','$pin','$plot_size','$coverage','$category','$purpose','$kw','$type','$dedicated_line','$own_meter','$ack_no')";
                    $qry1=mysqli_query($conn,$query1);
                    if(!$qry1) { echo "error1"; }
                    $query_ret="SELECT * FROM consumer WHERE ack_no=$ack_no";
                    $qry_ret=mysqli_query($conn,$query_ret);
                    $row_ret=mysqli_fetch_array($qry_ret);
                    $consumer_id=$row_ret['consumer_id'];
                    echo "Consumer ID is::$consumer_id";
                    $queryuh="insert into usage_history (consumer_id) values ('$consumer_id')";
                    $qryuh=mysqli_query($conn,$queryuh);
                    if(!$qryuh) { echo "error2"; }
                    $querybh="insert into bill_history (consumer_id) values ('$consumer_id')";
                    $qrybh=mysqli_query($conn,$querybh);
                    if(!$qrybh) { echo "error3"; }
                    $queryup="insert into unpaid (consumer_id) values ('$consumer_id')";
                    $qryup=  mysqli_query($conn,$queryup);
                    if(!$qryup) { echo "error4"; }
                    if($qry1 AND $qryuh AND $qrybh AND $qryup)
                    {
                        mysqli_query($conn,"delete from new_connection where ack_no=$ack_no");
                        mysqli_query($conn,"COMMIT");
                        echo "<h2>Registration Successful.</h2>";
                        echo " Consumer ID: $consumer_id for Acknowledgement number $ack_no.";
                        $to = $email;
                        $subject = "JKPDD Registration";
                        $content= "Dear $name,\r\n \r\nYour JKPDD registration has been successfully completed. Now you are a consumer of JKPDD. Your JKPDD Consumer ID is : ".$consumer_id.". Kindly register yourself at our site with your Consumer ID and name, for getting help online. \r\n \r\nRegards\r\nJKPDD Support";
                        $headers = "From:project.test.php.iitm@gmail.com\r\n";

                        if(mail($to,$subject,$content,$headers))
                            echo "We have sent an email to the consumer with the new Consumer ID.";
                        else
                            echo "Mail not sent";

                        $query3="delete from new_connection where ack_no=$ack_no";
                        $qry3=mysqli_query($conn,$query3);
                    }
                    else
                    {
                        mysqli_query($conn,"ROLLBACK");
                        echo '<h1>Error</h1>There was some technical fault in the procedure. Please check database to see whether the registration process was complete or not.';
                    }
                ?>
            </div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>