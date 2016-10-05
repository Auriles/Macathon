<?php	
	if(empty($_POST['input_1187']) || empty($_POST['input_1803']) || empty($_POST['input_1023']) || empty($_POST['input_1571']) || empty($_POST['input_798']))
	{
		return false;
	}
	
	$input_1187 = $_POST['input_1187'];
	$input_1803 = $_POST['input_1803'];
	$input_1023 = $_POST['input_1023'];
	$input_1571 = $_POST['input_1571'];
	$input_798 = $_POST['input_798'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Macathon.";
	$email_body = "You have received a new message. \n\n".
				  "Input_1187: $input_1187 \nInput_1803: $input_1803 \nInput_1023: $input_1023 \nInput_1571: $input_1571 \nInput_798: $input_798 \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>