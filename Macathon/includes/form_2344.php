<?php	
	if(empty($_POST['input_679']))
	{
		return false;
	}
	
	$input_679 = $_POST['input_679'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Macathon.";
	$email_body = "You have received a new message. \n\n".
				  "Input_679: $input_679 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>