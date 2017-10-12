<?php
    include_once 'database_connect.php';
    $email=$_POST['email'];
    $id=$_POST['id'];
    $name=$_POST['name1'];
    $reply=$_POST['reply'];
    $to = $email;
    $subject = "JKPDD Complaint";
    $content= "Dear $name,\r\n \r\n".$reply."\r\n \r\nRegards\r\nJKPDDSupport.";
    $headers = "From:project.test.php.iitm@gmail.com\r\n";
    if(mail($to,$subject,$content,$headers))
        echo "Mail Sent";
    else
        echo "Mail Not sent";
    $query="update contact set status='replied' where id=$id";
    $qry=  mysqli_query($conn,$query);
    if($qry)
        echo "deleted";
    header("location:admin_contact.php");
?>