<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    if(!isset($_POST['id']))
        header("location:admin_contact.php");
    $_SESSION['cpage']='admin';
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
                <h1>Reply to message</h1>
            <?php
                $id=$_POST['id'];
                $status='pending';
                $query="select * from contact where id='$id' and status='$status'";
                $qry=mysqli_query($conn,$query);
                if($qry)
                    {
                    $row =  mysqli_fetch_array($qry);?>
                <form action="admin_reply_contact.php" name="form" method="post">
                        <table>
                            <tr>
                                <td>Message Sent by:<br><input type="text" disabled value="<?php echo $row['name'];?>" required name="name1"></td>
                                <td>E-mail ID:<br><input type="text" disabled value="<?php echo $row['email'];?>" required name="email"></td>
                                <td>Message date:<br><input type="text" disabled value="<?php echo $row['date'];?>"></td>
                            </tr>
                            <tr>
                                <td>Message:</td>
                                <td colspan="2"><textarea cols="40" rows="5" disabled><?php echo $row['message'];?></textarea></td>
                            </tr>
                            <tr>
                                <td>Reply:</td>
                                <td><textarea cols="40" rows="5" required name="reply"></textarea></td>
                                <td><input type="text" value="<?php echo $id; ?>" hidden required name="id"><input type="submit" value="Send" onclick="name1.disabled=false; email.disabled=false; "></td>
                            </tr>
                        </table>
                </form>
                    <?php } else { echo "Error"; } ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>