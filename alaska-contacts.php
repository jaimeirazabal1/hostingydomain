<?php
if( isset($_POST['name']) )
{
	//ventas@hostingydomain.com
	//$to = 'themestudio.net@gmail.com'; // Replace with your email
	$to = 'ventas@hostingydomain.com'; // Replace with your email
	
	$subject = $_POST['subject'];
	$telephone = $_POST['telephone'];
	$message = $_POST['comment'] . "\n\n" . 'Telephone, ' . $_POST['telephone']. "\n\n" . 'Regards, ' . $_POST['name'] . '.';
	$headers = 'From: ' . $_POST['name'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	 
	$send_mail = mail($to, $subject, $message, $headers);
	
	if($send_mail)
    {         
       echo  '<div class="mailchip-success">Your message was sent successfully. Thanks.</div>';	
    }else{
        echo  '<div class="mailchip-success">Error,Send mail not successfull. Please try again.</div>';	
    }

}


?>
