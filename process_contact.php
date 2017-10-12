<?php
    session_start();
    require_once 'database_connect.php';
    $_SESSION['cpage']="contact";
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
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $message=$_POST['message'];
            $date="20".date("y-m-d");
            $query="INSERT INTO contact (name,email,phone,message,date) VALUES ('$name','$email','$phone','$message','$date')";
            $qry=mysqli_query($conn,$query);
            if($qry)
            {
                $to = $email;
                $subject = "JKPDD Support";
                $content= "Dear $name,\r\n \r\nWe have received your message. \r\nWe will get back to you on the earliest.";
                $headers = "From:project.test.php.iitm@gmail.com\r\n";
                echo "<h1>Thank You!</h1><br>"."<font size='4'>Your message has been registered. We will call you back at the earliest.";
                if(mail($to,$subject,$content,$headers))
                    echo "";
                else
                    echo "";
            }
            else
            {
                echo "<h1>Error!</h1><br><font size='4'>Go <a href='contact.php'>Back</a> to Previous Page</font>";
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