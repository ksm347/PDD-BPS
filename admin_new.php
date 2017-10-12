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
                <h1>Add New Member</h1>
                <form action="admin_process_new.php" method="post">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" required onkeypress="return enterAlpha(this.id);"></td>
                        </tr>
                        <tr>
                            <td>Position</td>
                            <td><input type="text" name="position" required maxlength="20" onkeypress="return enterAlpha(this.id);"></td>
                        </tr>
                        <tr>
                            <td>E-mail Address</td>
                            <td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" required onkeypress="return enterAlphaNumericwithoutspace(this.id);"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="password" required onkeypress="return enterAlphaNumericwithoutspace(this.id);"></td>
                        </tr>
                        <tr>
                            <td></td><td><input type="submit"></td>
                        </tr>
                    </table>
                </form>
                <br><hr>
                <h1>Newly Added Members</h1>
                <table>
                    <tr>
                        <th>Recent Members</th>
                        <th>Position</th>
                        <th>Date Joined</th>
                    </tr>
                    <?php
                        $qry= mysqli_query($conn,"select * from admin order by date desc");
                        for($i=1;$i<4;$i++)
                        {
                            $row=mysqli_fetch_array($qry);
                    ?>
                    <tr align="center">
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                    <?php if($row=  mysqli_fetch_array($qry)) { ?><tr align="center"><td><td><td><a href="admin_members.php">..See All</a></td></tr><?php } ?>
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