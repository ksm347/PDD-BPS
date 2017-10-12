<?php
    session_start();
    require_once 'database_connect.php';
    if(!isset($_SESSION['consumer_id']))
    {
        $_SESSION['page']='billpayment.php';
        header("location: login.php");
    }
    $_SESSION['cpage']="account";
?>
<html>
<head>
<title>JKPDD</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link rel="stylesheet" type="text/css" href="css/form-1.css"/>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-ptsans.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<script src="js/modernizr.custom.63321.js"></script>
</head>
<body>
<div id="top"></div>
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
            <h1>Bill Payment</h1>
            <form class='form-1' action="process_billpayment.php" method="POST">
                <table border="0">
                    <tr><th colspan='2' align='center' bgcolor='#232528'>PLEASE VERIFY YOUR DETAILS</th></tr>
                    <tr>
                        <td>Consumer ID : </td>
                        <td><input type="text" name="amount" value="<?php echo $_SESSION['consumer_id']; ?>" disabled></td>
                    </tr>
                    <tr>
                        <td>Amount : </td>
                        <?php
                            $consumer_id=$_SESSION['consumer_id'];
                            $result=mysqli_query($conn,"select amount from unpaid where consumer_id=$consumer_id");
                            $row=mysqli_fetch_array($result);
                        ?>
                        <td><input type="text" name="amount" placeholder="Rs." value="<?php echo $row['amount'];?>" required maxlength="5" onkeypress="return enterNumerics(event,this.id)"></td>
                    </tr>
                    <tr><th colspan='2' align='center' bgcolor="#232528">PAYMENT METHOD</th></tr>
                    <tr>
                        <td><input type="radio" name='method' value='Credit Card' required onchange="disableButton23();">Credit Card</td>
                        <td><select name="source" id="select1" required disabled>
                                <option hidden selected disabled></option>
                                <option value="American Express">American Express</option>
                                <option value="Diners Club International">Diner's Club International</option>
                                <option value="Master Card">Master Card</option>
                                <option value="Visa">Visa</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="method" value='Debit Card' required onchange="disableButton13();">Debit Card</td>
                        <td><select name="source" id="select2" required disabled>
                                <option hidden selected disabled></option>
                                <option value="HDFC">HDFC</option>
                                <option value="ICICI">ICICI</option>
                                <option value="JK BANK">JK BANK</option>
                                <option value="PUNJAB NAITONAL BANK">PUNJAB NAITONAL BANK</option>
                                <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
                                <option value="UCO BANK">UCO BANK</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="method" value='net Banking' required onchange="disableButton12();">Net Banking</td>
                        <td><select name="source" id="select3" required disabled>
                                <option hidden selected disabled></option>
                                <option value="HDFC">HDFC</option>
                                <option value="ICICI">ICICI</option>
                                <option value="JK BANK">JK BANK</option>
                                <option value="PUNJAB NAITONAL BANK">PUNJAB NAITONAL BANK</option>
                                <option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
                                <option value="UCO BANK">UCO BANK</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
      </div>
        <!--sidebar menu-->
      <?php
        include'sidebar.html';
      ?>
      <div class="clr"></div>
    </div>
  </div>
<?php include_once 'footer.php'; ?>
</div>

</html>
