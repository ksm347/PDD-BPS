<?php
    require_once 'database_connect.php';
    session_start();
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
<SCRIPT LANGUAGE="JavaScript">
function CheckAll(chk)
{
    for (i = 0; i < chk.length; i++)
    chk[i].checked = true ;
}
function UnCheckAll(chk)
{
    for (i = 0; i < chk.length; i++)
    chk[i].checked = false ;
}
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">        
        <?php include_once 'admin_header.php';?>
      <div class="clr"></div>
    </div>
  </div>
    <div class="content">
        <div class="content_resize">
            <div class="article">
            <?php
                if(!isset($_POST['ack_no']))
                    header("location:admin_connection.php");
                $ack_no=$_POST['ack_no'];
                $_SESSION['ack_no']=$ack_no;
                $query="select * from new_connection where ack_no=$ack_no";
                $qry=mysqli_query($conn,$query);
                if(!mysqli_num_rows($qry))
                {
                    die("Go <a href='admin_connection.php'>Back</a><br>Invalid acknowledgment number.");
                }
                $row=mysqli_fetch_array($qry);
            ?>
                <h2>Verify New Connection</h2>
                Check mark all the details that are verified and click continue
                <form action="admin_new_consumer.php" method="post" name="form">
                <table>
                    <tr><td colspan=3 align="right"><input type="button" name="Check_All" value=" Check All " onClick="CheckAll(document.form.check_list);"><input type="button" name="Un_CheckAll" value="Uncheck All" onClick="UnCheckAll(document.form.check_list);"></td></tr>
                    <tr><td>Acknowledgment Number</td><td><?php echo $row['ack_no']; ?></td><td></td></tr>
                    <tr><td>Name</td><td><?php echo $row['name']; ?></td><td><input type="checkbox" required name="check_list" value="1"></td></tr>
                    <tr><td>Father/Husband/Trustee</td><td><?php echo $row['father_husband_trustee']; ?></td><td><input type="checkbox" required name="check_list" value="2"></td></tr>
                    <tr><td>Communication Address</td><td><?php echo $row['comm_address_line_1'].'<br>'.$row['comm_address_line_2']; ?></td><td><input type="checkbox" required name="check_list" value="3"></td></tr>
                    <tr><td>City</td><td><?php echo $row['comm_city']; ?></td><td><input type="checkbox" required name="check_list" value="4"></td></tr>
                    <tr><td>PIN</td><td><?php echo $row['comm_pin']; ?></td><td><input type="checkbox" required name="check_list" value="5"></td></tr>
                    <tr><td>Phone No.</td><td><?php echo $row['phone']; ?></td><td><input type="checkbox" required name="check_list" value="6"></td></tr>
                    <tr><td>Mobile No.</td><td><?php echo $row['mobile']; ?></td><td><input type="checkbox" required name="check_list" value="7"></td></tr>
                    <tr><td>Email Address</td><td><?php echo $row['email']; ?></td><td><input type="checkbox" required name="check_list" value="8"></td></tr>
                    <tr><td>Connection Address</td><td><?php echo $row['address_line_1'].'<br>'.$row['address_line_2'];  ?></td><td><input type="checkbox" required name="check_list" value="9"></td></tr>
                    <tr><td>City</td><td><?php echo $row['city']; ?></td><td><input type="checkbox" required name="check_list" value="10"></td></tr>
                    <tr><td>PIN</td><td><?php echo $row['pin']; ?></td><td><input type="checkbox" required name="check_list" value="11"></td></tr>
                    <tr><td>Plot Size</td><td><?php echo $row['plot_size']; ?></td><td><input type="checkbox" required name="check_list" value="12"></td></tr>
                    <tr><td>Coverage</td><td><?php echo $row['coverage']; ?></td><td><input type="checkbox" required name="check_list" value="13"></td></tr>
                    <tr><td>Category</td><td><?php echo $row['category']; ?></td><td><input type="checkbox" required name="check_list" value="14"></td></tr>
                    <tr><td>Purpose</td><td><?php echo $row['purpose']; ?></td><td><input type="checkbox" required name="check_list" value="15"></td></tr>
                    <tr><td>Power Supply</td><td><?php echo $row['kw']; ?></td><td><input type="checkbox" required name="check_list" value="16"></td></tr>
                    <tr><td>Nearest Neighbor Consumer ID</td><td><?php echo $row['neighbour_id']; ?></td><td><input type="checkbox" required name="check_list" value="17"></td></tr>
                    <tr><td>Type</td><td><?php echo $row['type']; ?></td><td><input type="checkbox" required name="check_list" value="18"></td></tr>
                    <tr><td>Dedicated Line</td><td><?php echo $row['dedicated_line']; ?></td><td><input type="checkbox" required name="check_list" value="19"></td></tr>
                    <tr><td>Own Meter</td><td><?php echo $row['own_meter']; ?></td><td><input type="checkbox" required name="check_list" value="20"></td></tr>
                    <tr><td>Bill Due On Connection</td><td><?php echo $row['due_connection']; ?></td><td><input type="checkbox" required name="check_list" value="21"></td></tr>
                    <tr><td>Bill Due on premises</td><td><?php echo $row['due_premises']; ?></td><td><input type="checkbox" required name="check_list" value="22"></td></tr>
                    <tr><td>Other Bills Due</td><td><?php echo $row['due_others']; ?></td><td><input type="checkbox" required name="check_list" value="23"></td></tr>
                    <tr><td>Date</td><td><?php echo $row['date']; ?></td><td><input type="checkbox" required name="check_list" value="24"></td></tr>
                    <tr><td align="center"><a href="admin_connection.php"><button type="button">Cancel</button></a></td><td></td><td><input type="submit" value="Continue"></td></tr>
                </table>
            </form>
            </div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>