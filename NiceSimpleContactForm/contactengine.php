<?php

function sendMessage($Name, $City, $Email, $Message, $EmailTo, $Subject, $EmailFrom) {
	// prepare email body text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $Name;
	$Body .= "\n";
	$Body .= "Tel: ";
	$Body .= $City;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $Email;
	$Body .= "\n";
	$Body .= "Message: ";
	$Body .= $Message;
	$Body .= "\n";

	// send email 
	mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
  	// header('Location: /contactthanks/');
  	// die();
	
}

function validate_send_email($Name, $City, $address, $Email, $Message) {
	$EmailFrom = "contact@ampnetmedia.com";
	$EmailTo = "adam@ampnetmedia.com";
	$Subject = "New message from ampnetmedia - ";
	$Name = Trim(stripslashes($Name)); 
	$City = Trim(stripslashes($City)); 
	$address = Trim(stripslashes($address));
	$Email = Trim(stripslashes($Email)); 
	$Message = Trim(stripslashes($Message)); 

	// validation
	$validationOK=true;

	$error = array();

	if (isset($address)) {
		if ($address == '' or $address == ' ') {
			$validationOK = true;
		}else{
			var_dump($address);
			$validationOK = false;
			$error[] = "We're sorry, something went wrong here... Please try again.";
		}
	}
	if (isset($Name)) {
		if ($Name == '' or $Name == ' ') {
			$validationOK = false;
			$error[] = "Please enter a name in the Name field."; 
		}
	}
	if (isset($City)) {
		if ($City == '' or $City == ' ') {
			$validationOK = false;
			$error[] = "Please enter a city and state for our convinence."; 
		}
	}

	if (isset($Email)) {
		$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		if (!preg_match($pattern, $Email)) {
			$validationOK = false;
			$error[] = "Please enter a valid Email address";
		}
	}

	if (isset($Message)) {
		if ($Message == '' or $Message == ' ') {
			$validationOK = false;
			$error[] = "Please enter a message into the Message box."; 
		}
	}

	if (!$validationOK) {
		$emailStatus = $error;
		
	} else {
		sendMessage($Name, $City, $Email, $Message, $EmailTo, $Subject, $EmailFrom);
		$emailStatus = 'success';
		// print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact/contactthanks\">";
	}

	return $emailStatus;
}
?>