<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
    $_SESSION['cpage']='complaint';
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
                <h2>Queries</h2>
                <?php
                    $query_ret="select * from contact where status='pending' order by date asc limit 5";
                    $qry_ret=  mysqli_query($conn,$query_ret);
                    $num=  mysqli_num_rows($qry_ret);
                    if(!$num)
                        die("No messages registered.");
                    else {
                ?>
                <table>
                        <tr>
                            <th align="right" width="30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consumer ID</th>
                            <th align="center" width="29%">Details</th>
                            <th align="left">Date</th>
                        </tr>
                        <?php
                            while($row_ret=  mysqli_fetch_array($qry_ret)) {
                        ?>
                        <tr>
                            <td align="center" colspan="4">
                                <form action="admin_process_contact.php" method="POST">
                                    <input type="text" value="<?php echo $row_ret['name']; ?>" name="name">
                                    <input type="text" value="<?php echo $row_ret['id']; ?>" name="id" hidden>
                                    <textarea rows="6" cols="30"><?php echo $row_ret['message']; ?></textarea>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="text" value="<?php echo $row_ret['date']; ?>" name="date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="submit" value="Reply">
                                </form>
                            </td>
                        </tr>
                            <?php } ?>
                    </table>
                <?php 
                    }
                    ?>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>