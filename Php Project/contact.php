<?php

$con=mysqli_connect('localhost','root');

if($con)
{
  echo "Connection Successful";
}
else{
echo "No connection";
}

mysqli_select_db($con,'userdata');

$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


$query="insert into user (user,email,phone,message) values('$user','$email','$phone','$message')";


mysqli_query($con,$query);


header('location:index.php');

?>