<?php

function sendMessage($Name, $City, $Emial, $Message) {
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
	$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
  	// header('Location: /contactthanks/');
  	return $success;
  	die();
	
}

function validate_send_email($Name, $City, $Email, $Message) {
	$EmailFrom = "contact@holiday-design.com";
	$EmailTo = "contact@holiday-design.com";
	$Subject = "New message from holiday-design - ";
	$Name = Trim(stripslashes($_POST['Name'])); 
	$City = Trim(stripslashes($_POST['City'])); 
	$Email = Trim(stripslashes($_POST['Email'])); 
	$Message = Trim(stripslashes($_POST['Message'])); 

	// echo $Name.' '.$City.' '.$Email.' '.$Message.'<br>';

	// validation
	$validationOK=true;

	$error = array();

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
		// echo "<br>";
		// print_r($error);
	  // print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact/?error=true\">";
	  // exit;
	} else {
		sendMessage($Name, $City, $Email, $Message);
		// print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact/contactthanks\">";
	}


	// redirect to success page 
	// if ($success){
	//   print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact/contactthanks\">";
	// }
	// else{
	//   print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
	// }
	return $emailStatus;
}
?>