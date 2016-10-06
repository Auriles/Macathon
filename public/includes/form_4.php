<?php	
	if(empty($_POST['name4']) || empty($_POST['email4']))
	{
		return false;
	}
	
	$name4 = $_POST['name4'];
	$email4 = $_POST['email4'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Macathon.";
	$email_body = "You have received a new message. \n\n".
				  "Name4: $name4 \nEmail4: $email4 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email4";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>