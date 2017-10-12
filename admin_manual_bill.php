<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['admin_id']))
        header("location: admin_login.php");
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
                <form action="admin_process_manual_bill.php" method="post">
                    <table>
                        <tr>
                            <td>Consumer ID:</td>
                            <td align="right"><input type="text" name="con_id" required maxlength="13" placeholder="Consumer_ID" onkeypress="return enterNumerics(event,this.id);"></td>
                        </tr>
                        <tr>
                            <td>Amount:</td>
                            <td align="right"><input type="text" name="amount" required maxlength="5" placeholder="Rs." onkeypress="return enterNumerics(event,this.id);"></td>
                        </tr>
                        <tr>
                            <td>Source of Payment:</td>
                            <td align="right"><select name="source" required>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=2 align="center"><input type="submit" value="Pay"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>
    <?php include_once 'admin_footer.php';?>
</body>
</html>