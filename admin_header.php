<html>
<head><script type="text/javascript" src="js/if_fieldValidation.js"></script></head>
<?php
    $cpage=$_SESSION['cpage'];
?>
<div class="logo">  
    <h1><a href="index.php"><span>JKPDD Management</span></a></h1>
</div>
<div class="menu_nav">
    <ul>
        <li<?php if($cpage==="admin") echo " class='active'"?>><a href="admin_loggedin.php">Admin</a></li>
        <li<?php if($cpage==="connect") echo " class='active'"?>><a href="admin_connection.php">Connection</a>
            <ul>
                <li><a href="admin_connection.php">Verify</a></li>
                <li><a href="admin_connection_deactivate.php">Service OFF</a></li>
                <li><a href="admin_connection_activate.php">Service ON</a></li>
            </ul>
        </li>
        <li<?php if($cpage==="complaint") echo " class='active'"?>><a href="admin_complaint.php">Grievances</a>
            <ul>
                <li><a href="admin_complaint.php">Complaints</a></li>
                <li><a href="admin_complete_complaint.php">Finish Job</a></li>
                <li><a href="admin_contact.php">Messages</a></li>
            </ul>
        </li>
        <li<?php if($cpage==="bill") echo " class='active'"?>><a href="admin_billing.php">Billing</a>
            <ul>
                <li><a href="admin_bill_month.php">Bill Entry</a></li>
                <li><a href="admin_manual_bill.php">Manual Collection</a></li>
            </ul>
        </li>
        <li<?php if($cpage==="account") echo " class='active'"?>><a href='admin_loggedin.php'><span>Account</span></a>
            <?php if($cpage!=='login') { ?>
            <ul>
                <li><a href="admin_password.php"><i>Change Password</i></a></li>
                <li><a href="logout.php"><i>Logout</i></a></li>
            </ul>
            <?php } ?>
        </li>
    </ul>
</div>
<?php unset($_SESSION['cpage']); ?>
</html>