<?php

	$mail_request = isset($_REQUEST['mail_request']) ? $_REQUEST['mail_request']:'';
	echo $mail_request;

	if($mail_request == 'mail_request'){

		$name = isset($_REQUEST['name']) ? $_REQUEST['name']:'';
		$email = isset($_REQUEST['mail']) ? $_REQUEST['mail']:'';
		$phone = isset($_REQUEST['phone']) ? $_REQUEST['phone']:'';
		$msg  =  isset($_REQUEST['msg']) ? $_REQUEST['msg']:'';
		$msg = nl2br($msg);

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: $name <$email>\r\n";


		$to = "krishna.ms456@gmail.com";

		$subject = 'Website Enquiry';

		$message  = 'Name : '.$name. '<br />';
		$message .= 'Email : '.$email. '<br />';
		$message .= 'Phone : '.$phone. '<br />';
		$message .= 'Message : '.$msg ;

		mail( $to, $subject, $message, $headers);

		echo "true";
		exit;

	}else{


		echo "false";
	}


?>
