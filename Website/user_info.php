<?php


$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con,'userinfo_data');

$user = $_POST['user'];
$mail = $_POST['mail'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfo_data (user,mail,mobile,comment) values('$user','$mail','$mobile','$comment')";

mysqli_query($con,$query);

echo "$query";

mysqli_query($con,$query);



?>