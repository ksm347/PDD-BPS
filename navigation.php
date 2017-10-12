<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="logo">
          <h1><a href="index.php"><span> <font color="white"> PDD ONLINE  </font></span> <small> <font color="white"> Save Electricity save kashmir </font> </small></a></h1>
        </div>
        <div class="menu_nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="support.php">Support &#9662;</a>
                    <ul>
                        <?php if(!isset($_SESSION['consumer_id'])) {?><li><a href="register.php">New Connection</a></li><?php } ?>
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
    </body>
</html>
