<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    if(isset($_POST['month']))
        $_SESSION['month']=$_POST['month'];
    if(!isset($_SESSION['month']))
        header('location:admin_bill_month.php');
    else
    {
        $month=$_SESSION['month'];
        $qry_check=mysqli_query($conn,"select $month from usage_history");
        mysqli_query($conn,"SET AUTOCOMMIT=0");
        mysqli_query($conn,"START TRANCACTION");
        if(!$qry_check)
        {
            $query_uh=mysqli_query($conn,"ALTER TABLE usage_history ADD $month INT(5) NULL AFTER consumer_id");
            $query_bh=mysqli_query($conn,"ALTER TABLE bill_history ADD $month INT(5) NULL AFTER consumer_id");
            if($query_uh AND $query_bh)
                mysqli_query($conn,"ROLLBACK");
            else
                mysqli_query ($conn,"COMMIT");
        }
        $query="select * from usage_history where $month IS NULL order by consumer_id asc";
        $qry=  mysqli_query($conn,$query);
        $row=  mysqli_fetch_array($qry);
        $_SESSION['con_id']=$row['consumer_id'];
        $con_id=$_SESSION['con_id'];
    }
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
                <h2>New Bill Entry</h2>
                <?php 
                $num=  mysqli_num_rows($qry);
                if(!$num)
                    echo "All consumers have been charged.";
                else {
                ?>
                Enter the units consumed against the Conusumer ID as given under for the month <?php echo $_SESSION['month']; ?>
                <form action="admin_process_billing.php" method="post">
                    <table>
                        <tr>
                            <th>Consumer ID</th>
                            <th>Usage(Units)</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><?php echo $con_id; ?></td>
                            <td align="center"><input type="text" name="unit" required maxlength="5" onkeypress="return enterNumerics(event,this.id);"></td>
                            <td align="center"><input type="submit"></td>
                        </tr>
                    </table>
                </form>
                <?php } ?>
                <hr>
                <h2>Bill Update</h2>
                
                    <table>
                        <tr>
                            <td>Enter Consumer ID to check units entered:</td>
                            <td><form action="admin_billing.php"><input name=con_id type="text" required maxlength="13" onkeypress="return enterNumerics(event,this.id);" value="<?php if(isset($_GET['con_id'])) { echo $_GET['con_id']; } ?>"><input type="submit" value="Check"></form></td>
                        </tr>
                        <tr>
                            <td>Units Consumed:</td>
                            <?php
                            if(isset($_GET['con_id']))
                            {
                                $con_id=$_GET['con_id'];
                                $qry=mysqli_query($conn,"select $month from usage_history where consumer_id=$con_id");
                                $row=  mysqli_fetch_array($qry);
                                $unit=$row[$month];
                            }
                            ?>
                            <td><form action="admin_bill_edit.php" method="POST"><input name="unit" type="text" value="<?php if(isset($_GET['con_id'])) echo $unit; ?>" required maxlength="5" onkeypress="return enterNumerics(event,this.id);"><input hidden name=con_id type="text" required maxlength="13" onkeypress="return enterNumerics(event,this.id);" value="<?php if(isset($_GET['con_id'])) { echo $_GET['con_id']; } ?>"><input type="submit" value="Update"></form></td>
                        </tr>
                    </table>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>