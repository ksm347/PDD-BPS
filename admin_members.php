<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location:admin_login.php");
    if($_SESSION['admin_id']!=='admin')
        header("location:admin_loggedin.php");
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
                <h1>Members</h1>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Date Joined</th>
                        <th>E-mail</th>
                    </tr>
                    <?php
                        $qry= mysqli_query($conn,"select * from admin order by date asc");
                        while($row=mysqli_fetch_array($qry))
                        { 
                    ?>
                    <tr align="center">
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                <br><hr>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>