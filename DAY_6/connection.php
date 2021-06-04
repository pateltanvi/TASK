<?php

$host = "localhost";
$username = "root";
$pwd = "";
$dbname = "db_internship";
//Connection Function
$connection = mysqli_connect($host, $username, $pwd, $dbname);

  $q = mysqli_query($connection,
       "insert into tbl_user(user_name,user_gender,user_mobile) values('Tanvi','Female','123')")
	   or die("Error".mysqli_error($connection));
	   
	   if($q)
	   {
		   echo "<script>alert('Record Added');</script>";
	   }
