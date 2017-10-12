<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='complaintstatus.php';
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
                    <h1>Complaint Status</h1>
        <?php
            $ack_no=$_POST['ack_no'];
            $consumer_id=$_SESSION['consumer_id'];
            $query="select * from complaints where ack_no='$ack_no' and consumer_id='$consumer_id'";
            $qry=mysqli_query($conn,$query);
            if(mysqli_num_rows($qry)===1)
                {
                $row =  mysqli_fetch_array($qry);?>
                    <table>
                        <tr>
                            <td>Complaint registered by:</td>
                            <td><input type="text" disabled value="<?php echo $row['name'];?>"></td>
                        </tr>
                        <tr>
                            <td>Consumer ID:</td>
                            <td><input type="text" disabled value="<?php echo $row['consumer_id'];?>"></td>
                        </tr>
                        <tr>
                            <td>Complaint date:</td>
                            <td><input type="text" disabled value="<?php echo $row['date'];?>"></td>
                        </tr>
                        <tr>
                            <td>Complaint type:</td>
                            <td><input type="text" disabled value="<?php echo $row['type'];?>"></td>
                        </tr>
                        <tr>
                            <td>Complaint status:</td>
                            <td><input type="text" disabled value="<?php echo $row['status'];?>"></td>
                        </tr>
                    </table>
                <h1>Thank you for your patience!</h1><br>
                <?php
                echo "<font size='4'>Your complaint is ".$row['status'].".";
                echo "<br><br>For further details click <a href='contact.php'>Contact Us</a> and get in touch with our executives.</font>";
                }
            else
                {
                echo "<h1>Error!</h1><br><font size='4'>Go Back to Previous Page and enter valid Acknowledgement Number</font>";
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