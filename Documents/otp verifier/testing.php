<html>
<head>
<?head>
<body>
<?php
include('msgtest1.php');
session_start();
$displaybtn=True;
if(isset($_POST['save']))
{
$rno=$_SESSION['otp'];
$urno=$_POST['otpvalue'];
if(!strcmp($rno,$urno))
{
$email=$_SESSION['email'];
//For admin if he want to know who is register
$to="example@gmail.com";
$subject = "Thank you!";
header("Location: gratit.php");
//For admin if he want to know who is register
}
else
{

header("Location: back.php");
}
}

 
if(isset($_POST['resend']))
{
$displaybtn=False;
$message="<p class='w3-text-green'>Sucessfully send OTP to your mail.</p>";
$rno=$_SESSION['otp'];
$to=$_SESSION['email'];
$subject = "OTP";
$txt = "OTP: ".$rno."";
sendsms($to,$rno);
$message="<p class='w3-text-green w3-center'><b>Sucessfully resend OTP to your mail.</b></p>";
}
?>

<br>
<form  method="post" action="">
<p><input class="w3-input w3-border w3-round" type="password" placeholder="OTP" name="otpvalue"></p>
<p class="w3-center"><button class="w3-btn w3-green w3-round" style="width:100%;height:40px" name="save">Submit</button></p>
<?php 
if($displaybtn)
{
?>
<form action="" method="POST">
<p class="w3-center"><button class="w3-btn w3-green w3-round" style="width:100%;height:40px" name="resend">Resend</button>
</form>
<?php
  }
?>
</form>
</body>
</html>