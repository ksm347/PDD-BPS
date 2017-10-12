<?php
    session_start();
    require_once 'database_connect.php';
    if(isset($_SESSION['consumer_id']))
    {
        header("location: need.php");
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
            $ack_no=  rand(111111111,999999999);
            $name=$_POST['name'];
            $father_husband_trustee=$_POST['father_husband_trustee'];
            $comm_address_line_1=$_POST['comm_address_line_1'];
            $comm_address_line_2=$_POST['comm_address_line_2'];
            $comm_city=$_POST['comm_city'];
            $comm_pin=$_POST['comm_pin'];
            $phone=$_POST['phone'];
            $mobile=$_POST['mobile'];
            $email=$_POST['email'];
            $address_line_1=$_POST['address_line_1'];
            $address_line_2=$_POST['address_line_2'];
            $city=$_POST['city'];
            $pin=$_POST['pin'];
            $plot_size=$_POST['plot_size'];
            $coverage=$_POST['coverage'];
            $category=$_POST['category'];
            $purpose=$_POST['purpose'];
            $kw=$_POST['kw'];
            $neighbour_id=$_POST['neighbour_id'];
            $type=$_POST['type'];
            $dedicated_line=$_POST['dedicated_line'];
            $own_meter=$_POST['own_meter'];
            $due_connection=$_POST['due_connection'];
            $due_premises=$_POST['due_premises'];
            $due_others=$_POST['due_others'];
            $date="20".date("y-m-d");
            $query="INSERT INTO new_connection VALUES ('$ack_no','$name','$father_husband_trustee','$comm_address_line_1','$comm_address_line_2','$comm_city','$comm_pin','$phone','$mobile','$email','$address_line_1','$address_line_2','$city','$pin','$plot_size','$coverage','$category','$purpose','$kw','$neighbour_id','$type','$dedicated_line','$own_meter','$due_connection','$due_premises','$due_others','$date')";
            $qry=mysqli_query($conn,$query);
            if($qry)
            {
                echo "<h1>Thank You!</h1><br>"."<font size='4'>You request has been registered. To complete the process kindly note down your acknowledgement number and visit your nearest PDD Unit with all necessary documents.";
                echo "<br><br>Acknowledgment No. :".$ack_no."</font>";
                $to = $email;
                $subject = "JKPDD Registration";
                $content= "Dear $name,\r\n \r\nYour request for new connection has been received. Kindly visit you nearest JKPDD unit with the Acknowledgement No.: $ack_no and proof of the details you already submitted.\r\n \r\nRegards\r\nJKPDD";
                $headers = "From:project.test.php.iitm@gmail.com\r\n";
                if(mail($to,$subject,$content,$headers))
                    echo "";
                else
                    echo "<br>Mail not sent.";
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
    <?php include_once 'footer.php'; ?>
</div>
</body>
</html>