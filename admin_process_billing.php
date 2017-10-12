<?php
    session_start();
    require_once 'database_connect.php';
    if(isset($_POST['unit']))
    {
        $month=$_SESSION['month'];
        $unit=$_POST['unit'];
        $con_id=$_SESSION['con_id'];
        $qry_uh=mysqli_query($conn,"update usage_history set $month='$unit' where consumer_id='$con_id'");
        $qry_ret=mysqli_query($conn,"select * from consumer where consumer_id='$con_id'");
        $row_ret=mysqli_fetch_array($qry_ret);
        if($row_ret['purpose']==="Residential")
        {
            if($unit<30)
            {   $bill=$unit*1.19; }
            else if($unit<100)
            {
                $unit=$unit-30;
                $bill=$unit*1.65+35.7;
            }
            else if($unit<200)
            {
                $unit=$unit-100;
                $bill=$unit*2.03+151.2;
            }
            else
            {
                $unit=$unit-200;
                $bill=$unit*3.11+354.2;
            }
        }
        else
        {
            if($unit<100)
            {    
                $bill=$unit*2.31; 
            }
            else if($unit<200)
            {
                $unit=$unit-100;
                $bill=$unit*2.68+231;
            }
            else
            {
                $unit=$unit-200;
                $bill=$unit*3.88+499;
            }
        }
        $qry_bh=mysqli_query($conn,"update bill_history set $month='$bill' where consumer_id='$con_id'");
        if($qry_bh and $qry_uh)
        {
            mysqli_query($conn,"COMMIT");
            $qry_ret_unpaid=  mysqli_query($conn,"select * from unpaid where consumer_id='$con_id'");
            $row_ret_unpaid=  mysqli_fetch_array($qry_ret_unpaid);
            $bill=$bill+$row_ret_unpaid['amount'];
            $qry=  mysql_query ("update unpaid set amount='$bill' where consumer_id='$con_id'");
            $email=$row_ret['email'];
            $name=$row_ret['name'];
            $to = $email;
            $subject = "JKPDD Bill Payment";
            $content= "Dear $name,\r\n \r\nYour JKPDD electricity bill of Rs. $bill has been successfully updated. Your JKPDD Consumer ID is : $con_id. Kindly pay the said amount on or before the 30th of this month via our JKPDD website or at your nearest JKPDD Bill Collection Unit.\r\n\r\nRegards\r\nJKPDD Support.";
            $headers = "From:project.test.php.iitm@gmail.com\r\n";
            if(mail($to,$subject,$content,$headers))
                echo "";
            else
                echo "<br>Mail not sent";
        }
        else
            mysql_query ("ROLLBACK");
    }
    header("location:admin_billing.php")
?>