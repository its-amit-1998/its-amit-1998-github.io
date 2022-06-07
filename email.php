<?php 
		$mailto = "boltparty022@gmail.com";
		$message = $_POST['message'];
		$fromEmail = $_POST['email'];
		$subject = "Myportfolio";

		$headers = "From: " . $fromEmail;
	
	 if ($fromEmail != NULL) {
		$result = mail($mailto, $subject, $message, $headers);
	 }

	 header("Location:index.html");
?>

