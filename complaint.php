<?php
    session_start();
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='complaint.php';
        header("location: login.php");
    }
    $_SESSION['cpage']="support";
?>
<html>
<head>
<title>JKPDD</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="css/form-1.css"/>
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
      <?php include_once 'header.php'; ?>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"><a href="#"><img src="images/slide1.jpg" width="960" height="313" alt="" /></a> <a href="#"><img src="images/slide2.jpg" width="960" height="313" alt="" /></a> <a href="#"><img src="images/slide3.jpg" width="960" height="313" alt="" /></a></div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
            <h1>Complaint Form</h1>
            <form class='form-1' action="process_complaint.php" method="POST">
            <table border="0">
                <tr>
                    <th colspan="2" align="center"> REGISTER COMPLAINT </th>
                </tr>
                <tr>
                    <td height="40">Consumer ID: &nbsp</td>
                    <td>&nbsp&nbsp<input type="text" name="name" value="<?php echo $_SESSION['consumer_id']; ?>" required disabled>&nbsp*</td>
                </tr>
                <tr>
                    <td height="40">Name: &nbsp</td>
                    <td>&nbsp&nbsp<input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" required disabled>&nbsp*</td>
                </tr>
                <tr>
                    <td height="40">Email Id: &nbsp</td>
                    <td>&nbsp&nbsp<input type="email" name="email" required>&nbsp*</td>
                </tr>
                <tr>
                    <td height="40">Mobile: &nbsp</td>
                    <td>&nbsp&nbsp<input type="text" name="mobile" maxlength="10" required onkeypress=" return enterNumerics(event,this.id);">&nbsp*</td>
                </tr>
                <tr>
                    <td height="40">Complaint Type: &nbsp</td>
                    <td>&nbsp&nbsp<select name="type" required>
                            <option hidden selected>--Select--</option>
                            <option value="Bill Complaints">Bill complaints.</option>
                            <option value="Employee Complaints">Employee Related complaints.</option>
                            <option value="General Complaints">General Complaints.</option>
                            <option value="Meter Complaints">Meter Related Complaints.</option>
                            <option value="Supply Complaints">No Supply Complaints.</option>
                            <option value="Payment Complaints">Payment Complaints.</option>
                            <option value="Theft Complaints">Theft Related Complaints.</option>
                        </select>&nbsp*</td>
                </tr>
                <tr>
                    <td height="120">Complaint Details:&nbsp</td>
                    <td rowspan="1">&nbsp&nbsp<textarea name="details" style="height: 90px ;width: 270px" required></textarea>*<br></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" height="24">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="reset"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" height="24">All fields marked with (*) are mandatory</td>
                </tr>
            </table>
            </form>    
        </div>
        </div>
      <?php include_once 'sidebar.html'; ?>
      <div class="clr"></div>
    </div>
  </div>
<?php include_once 'footer.php'; ?>
</div>
</body>
</html>
