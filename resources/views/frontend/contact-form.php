<?php
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['msg'];

if(isset($fname) && isset($email))
{
	global $to_email,$vpb_message_body,$headers;
	$to_email="amna.amjad@devbunch.com";
	$email_subject="Inquiry From Contact Page";
	$vpb_message_body = nl2br("Dear Admin,\n
	The user whose detail is shown below has sent this message from ".$_SERVER['HTTP_HOST']." dated ".date('d-m-Y').".\n
	
	FirstName: ".$fname."\n
	LastName: ".$lname."\n
	Email Address: ".$email."\n
	Phone: ".$phone."\n
	Message: ".$message."\n
	
	Thank You!\n\n");
	
	//Set up the email headers
    $headers      = "From: $fname <$email>\r\n";
    $headers   .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers   .= "Message-ID: <".time().rand(1,1000)."@".$_SERVER['SERVER_NAME'].">". "\r\n"; 
	 if(@mail($to_email, $email_subject, $vpb_message_body, $headers))
		{
			  $status='Success';
			//Displays the success message when email message is sent
			  $output="Congrats ".$fname.", Thank you for your inquiry. Our sales team has been notified and will be in touch shortly.";
		} 
		else 
		{
			 $status='error';
			 //Displays an error message when email sending fails
			  $output="Sorry, your email could not be sent at the moment. Please try again or contact this website admin to report this error message if the problem persist. Thanks.";
		}
		
}
else{
	$status='error';
	$output="please fill require fields";
	
	}
echo json_encode(array('status'=> $status, 'msg'=>$output));

?>