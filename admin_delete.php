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
                <h1>Delete Members</h1>
                <form action="admin_process_delete.php" method="post">
                    <table>
                        <tr><th>
                            <th>Admin ID</th>
                            <th>Name</th>
                            <th>Position</th>
                        </tr>
                        <?php
                            $qry= mysqli_query($conn,"select * from admin order by date asc");
                            for($i=1;$i<4,$row=mysqli_fetch_array($qry);$i++)
                            { 
                        ?>
                        <tr align="center">
                            <td><input type="radio" name="username" value="<?php echo $row['admin_id']; ?>"</td>
                            <td><?php echo $row['admin_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['position']; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                    <input type="submit" style="float:right">
                </form>
                <br><hr>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <?php include_once 'admin_footer.php';?>
</div>
</body>
</html>