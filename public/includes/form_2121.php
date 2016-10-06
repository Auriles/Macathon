<?php	
	if(empty($_POST['cdepostal']))
	{
		return false;
	}
	
	$cdepostal = $_POST['cdepostal'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Macathon.";
	$email_body = "You have received a new message. \n\n".
				  "Cdepostal: $cdepostal \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>