<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'hospital_management');
$email=$_POST['email'];
$password=$_POST['password'];
$s="select * from users where email='$email' && password ='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1){
  header('location:link.php');
}
else{
  header('location:log.php');
}
?>
