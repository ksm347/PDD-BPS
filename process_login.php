<?php
    session_start();
    require_once 'database_connect.php';
    if(isset($_SESSION['consumer_id']))
    {
        header("location: need.php");
    }
    $_SESSION['cpage']="login";
    $consumer_id=$_POST['consumer_id'];
    $password=$_POST['password'];
    $page=$_SESSION['page'];
    $qry=mysqli_query($conn,"select * from user where consumer_id='$consumer_id' and password='$password'");
    if((mysqli_num_rows($qry))===1)
    {   
        $result=mysqli_query($conn,"select * from consumer where consumer_id='$consumer_id'");
        $row=mysqli_fetch_array($result);
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['consumer_id']=$consumer_id;
        if(isset($_SESSION['page']))
            header("location: $page");
        else
            header("location:loggedin.php");
    }
    else
    {
        $_SESSION['message']="error";
        header('location:login.php');
    }
?>