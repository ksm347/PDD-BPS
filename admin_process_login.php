<?php
    session_start();
    require_once 'database_connect.php';
    $admin_id=$_POST['admin_id'];
    $password=$_POST['password'];
    $qry=mysqli_query($conn,"select * from admin where admin_id='$admin_id' and password='$password'");
    if((mysqli_num_rows($qry))===1)
    {   
        $_SESSION['admin_id']=$admin_id;
        header("location:admin_loggedin.php");
    }
    else
    {
        $_SESSION['message']="error";
        header('location:admin_login.php');
    }
?>