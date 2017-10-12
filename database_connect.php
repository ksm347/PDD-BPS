<?php
	$mysql_hostname= "localhost";
	$mysql_user = "pddadmin";
	$mysql_password = "jkpdd";
	$mysql_database = "pdd";
	$conn = mysqli_connect($mysql_hostname, $mysql_user,$mysql_password);  //connection function
	mysqli_select_db($conn, $mysql_database);		//selecting database function
//        if($conn)
//        {
//            echo 'Successfully Connected to database';
//        }
//        else
//        {
//            echo ' Cannot connect to database';
//        }
?>