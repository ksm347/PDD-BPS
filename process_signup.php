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
      <?php include_once 'header.php';?>
      <div class="clr"></div>
    </div>
  </div>
    <div class="content">
        <div class="content_resize">    
            <div class="mainbar">
                <div class="article">
        <?php
            $consumer_id= $_POST['consumer_id'];
            $name= $_POST['name'];
            $password= $_POST['password'];
            $confirm= $_POST['confirm'];
            $email= $_POST['email'];
            $query1= mysqli_query($conn,"select * from user where consumer_id='$consumer_id'");
            $query2= mysqli_query($conn,"select * from consumer where consumer_id='$consumer_id' and name='$name'");
            if(mysqli_num_rows($query1)!==0)
            {
                echo "<h1>Error</h1><br><font size='4'>You already have an account on the Consumer ID: ".$consumer_id."<br>Kindly <a href='login.php'><i>Login</i></a> to access your account.</font>";
            }
            else if(mysqli_num_rows($query2)!==1)
            {
                echo "<h1>Error.</h1><br><font size='4'>We found that you don't have any account with Consumer ID: ".$consumer_id." and Name: ".$name."<br><br>";
                echo "Please check the details filled in.<br><br>Or if you are not a consumer of JKPDD you can register for a new connection here: <a href='register.php'><i>Register</i></a>.</font>";
            }
            else
            {
                $query= "insert into user values ('$consumer_id','$password','$email')";
                $qry=  mysqli_query($conn,$query);
                if($qry)
                {
                    echo "<h1>Thank You!</h1><br><font size='4'>Your account has been succesfully created. To access your account kindly click here: <a href='login.php'><i>LogIn</i></a>.</font>";
                    $to = $email;
                    $subject = "JKPDD Registration";
                    $content= "Dear $name,\r\n \r\nYou succsesfully signed up for JKPDD. Please sign in to check your account and pay your bills online. You can also get help from our executives. Be sure to take a glance at the services we provide.\r\n \r\nRegards\r\nJKPDD Support";
                    $headers = "From:project.test.php.iitm@gmail.com\r\n";
                    if(mail($to,$subject,$content,$headers))
                        echo "";
                    else
                        echo "Mail Not Sent.";
                }
                else
                    echo "<h1>Error.</h1><br><font size='4'>We are facing some technical difficulties, kindly return later.</font>";
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