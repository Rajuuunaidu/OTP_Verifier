<?php
session_start();
 include('msgtest1.php');
if(isset($_POST['email']))
{
 $email = $_POST['email'];
// echo $phone;
}
//if(empty($_POST['phone']))
//{
 //echo "plz enter number";
//}
//else
//{
// echo "plz enter number";
//}
echo "<br>";
$rand=rand(1,1000000);
  sendsms($email,$rand);
$_SESSION['email']=$_POST['email'];
$_SESSION['otp']=$rand;
header("Location: testing.php");
?>
