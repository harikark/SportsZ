<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name']; 
	$email = $_POST['mail']; 
	$message = $_POST['message']; 
	
	$mailTo="sensiblesoccer2@yahoo.com"; 
	$headers="From:".$email;
	$txt="You have recieved an email from ".$name.".\n\n".$message;

mail($mailTo,$email,$txt,$headers);
header("location:index.php?mailsend")
}

?>