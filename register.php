<?php
    session_start();
    if(isset($_SESSION['consumer_id']))
    {
        header("location: need.php");
    }
    $_SESSION['cpage']="support";
?>
<html>
<head>
<title>JKPDD</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
      <div class="logo">
        <h1><a href="index.php"><span>Jammu Kashmir Power Development Department</span> <small>Save Electricity. Save World.</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="support.php">Support &#9662;</a>
                    <ul>
                        <?php if(!isset($_SESSION['consumer_id'])) {?><li class="active"><a href="register.php">New Connection</a></li><?php } ?>
                        <li><a href="complaint.php">Complaint</a></li>
                        <li><a href="complaintstatus.php">Complaint Status</a></li>
                    </ul>
                </li>
                <li><a href="about.php">About Us &#9662;</a>
                    <ul>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
           <?php
          if(isset($_SESSION['consumer_id']))
            {?>
                <li><a href='loggedin.php'><span>Account &#9662;</span></a>
                    <ul>
                        <li><a href="change_password.php"><i>Change Password</i></a></li>
                        <li><a href="logout.php"><i>Logout</i></a></li>
                    </ul>
                </li>
            <?php 
            }
          else 
            {?>
                <li><a href='login.php'><span>LogIn &#9662;</span></a>
                    <ul>
                        <li><a href="login.php"><i>LogIn</i></a></li>
                        <li><a href="signup.php"><i>Sign Up</i></a></li>
                        <li><a href="admin_login.php">Admin</a></li>
                    </ul>
                </li>
            <?php } ?>
            </ul>
      </div>
    </div>
  </div>
            <div class="clr"></div>
  <div class="content">
      <div class="content_resize">
          <div class="mainbar">
            <div class="article">
              <form class="form-1" action="process_register.php" method="POST">
                  <h2 align="center">APPLICATION FORM NEW CONNECTION</h2>
        <table align="center"> 
            <tr><th colspan="2" align="center">PERSONAL</th></tr>
            <tr>
                <td>  Name of Applicant/Organization:   </td>
                <td> <input type="text" name="name" maxlength="40" id="name" required onkeypress='return enterAlpha(event, this.id);'><font color=#aa0000> <sup>*</sup> </font>  </td>
            </tr>
            <tr>
                <td>  Name of Father/Husband/Director/Partner/Trustee:   </td>
                <td> <input type="text" value="" name="father_husband_trustee" maxlength="40" id='trustee_name' required onkeypress='return enterAlpha(event, this.id);'> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr><th colspan="2" align="center">ADDRESS FOR COMMUNICATION</th></tr>
            <tr>
                <td>  Address Line 1:   </td>
                <td> <textarea name="comm_address_line_1" maxlength="70" required></textarea> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Address Line 2:   </td>
                <td> <textarea name="comm_address_line_2" maxlength="70" required></textarea> <font color=#aa0000> <sup>*</sup> </font>  </td>
            </tr>
            <tr>
                <td>  City: </td>
                <td> <input type="text" value="" name="comm_city" maxlength="15" required> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Postal code : </td>
                <td> <input type="text" value="" name="comm_pin" maxlength="6" id='comm_pin' required onkeypress='return enterNumerics(event, this.id);'> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Phone Number : </td>
                <td> <input type="text" value="" name="phone" maxlength="11" id='phone' required onkeypress='return enterNumerics(event, this.id);'> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Mobile Number : </td>
                <td> <input type="text" value="" name="mobile" maxlength="10" id='mobile' onkeypress='return enterNumerics(event, this.id);'></td>
            </tr>
            <tr>
                <td>  E-mail ID : </td>
                <td> <input type="email" value="" name="email" maxlength="50" required><font color=#aa0000> <sup>*</sup> </font></td>
            </tr>            
            <tr><th colspan="2" align="center">ADDRESS WHERE NEW CONNECTION IS APPLIED FOR / EXISTING CONNECTION IS REQUIRED TO BE SHIFTED</th></tr>
            <tr>
                <td>  Adress Line 1:   </td>
                <td> <textarea name="address_line_1" maxlength="70" required></textarea> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Adress Line 2:   </td>
                <td> <textarea name="address_line_2" maxlength="70" required></textarea> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  City:   </td>
                <td> <input type="text" name="city" maxlength="15" required> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Postal Code:  </td>
                <td> <input type="text" name="pin" maxlength="6" required onkeypress="return enterNumerics(event, this.id);"> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Plot Size (sq.ft):  </td>
                <td> <input type="text" name="plot_size" maxlength="6" required onkeypress="return enterNumerics(event, this.id);"> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Coverage Area (sq.ft):  </td>
                <td> <input type="text" name="coverage" maxlength="6" required onkeypress="return enterNumerics(event, this.id);"> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td> Category of Supply: </td>
                <td><select name="category" required>
                        <option value="NULL" hidden> --select-- </option>
                        <option value="Agriculture Supply"> Agriculture Supply </option>
                        <option value="Domestic"> Domestic </option>
                        <option value="LT Industrial Supply"> LT Industrial Supply </option>
                        <option value="LT Public Waters Works"> LT Public Waters Works </option>
                        <option value="Non-Domestic"> Non-Domestic </option>
                        <option value="Public Street Lights"> Public Street Lights </option>
                        <option value="State/Central Govt Dept"> State/Central Govt Dept </option>
                    </select> <font color=#aa0000> <sup>*</sup> </font>  <br>
                </td>
            </tr>
            <tr>
                <td> Purpose of Supply: </td>
                <td><select name="purpose" required>
                        <option value="NULL" hidden> --select--  </option>
                        <option value="Non-Residential"> Non-Residential </option>
                        <option value="Residential"> Residential </option>
                    </select> <font color=#aa0000> <sup>*</sup> </font> <br>
                </td>
            </tr>
            <tr>
                <td>  Total Load applied for (in KW): </td>
                <td> <input type="text" name="kw" maxlength="3" required onkeypress="return enterNumerics(event, this.id);"> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td>  Nearest neighbour's consumer id: </td>
                <td> <input type="text" name="neighbour_id" maxlength="13" required onkeypress="return enterNumerics(event, this.id);"> <font color=#aa0000> <sup>*</sup> </font> </td>
            </tr>
            <tr>
                <td> Type of Supply: </td>
                <td><select name="type" required>
                        <option value="NULL" hidden> --select--  </option> 
                        <option value="Permanent"> Permanent </option>
                        <option value="Temporary"> Temporary </option>
                    </select> <font color=#aa0000> <sup>*</sup> </font> <br>
                </td> 
            </tr>
            <tr>
                <td>  Please indicate whether you want to carry out </br>
                    the works of laying service line or dedicated </br> 
                    distribution facility  for the electricity supply </br>
                    requisitioned: </td>
                <td><select name="dedicated_line" required>
                        <option value="NULL" hidden> --select--  </option> 
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select> <font color=#aa0000> <sup>*</sup> </font> <br>
                </td> 
            </tr>
            <tr>
                <td> Please indicate whether you want to install your </br>
                    own CEA approved meter: </td>
                <td><select name="own_meter" required>
                        <option value="NULL" hidden> --select--  </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No</option>
                    </select> <font color=#aa0000> <sup>*</sup> </font> <br> </td> 
            </tr>
            <tr>
                <td> Any electricity dues outstanding in Licensee's </br>
                    area of operation in connection's name: </td> 
                <td><select name="due_connection" required>
                        <option value="NULL" hidden> --select--  </option> 
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select><font color=#aa0000> <sup>*</sup> </font> <br>
                </td> 
            </tr>
            <tr>
                <td> Any electricity dues outstanding for the </br>
                    premises for which connection applied for: </td> 
                <td><select name="due_premises" required>
                        <option hidden> --select--  </option> 
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option>
                    </select><font color=#aa0000> <sup>*</sup> </font> <br>
                </td> 
            </tr>
            <tr>
                <td>  Any electricity dues outstanding with the <br>
                    Licensee against any firm with which the <br>
                    consumer is associated as an Owner, Partner, <br>
                    Director or Managing Director: </td>
                <td><select name="due_others" required>
                        <option hidden> --select--  </option>
                        <option value="Yes"> Yes </option>
                        <option value="No"> No </option> </select> <font color=#aa0000> <sup>*</sup> </font> <br> </td> 
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Submit"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="reset"></td>
            </tr>
            <tr>
                <td colspan=2 align=center>All fields marked with (*) are mandatory.</td>
            </tr>
    </table>
              </form>
            </div>
          </div>
          <?php include 'sidebar.html'; ?>
          <div class="clr"></div>
      </div>
  </div>
  <?php include_once 'footer.php';?>
</div>
</body>
</html>