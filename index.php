<?php
	
if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$title = $_POST["title"];
	$message = $_POST["message"];

	$mailTo = "obinnaudeagha@yahoo.com";
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $title, $txt, $headers);
	header("Location: index.php?mailsend");
}	

?>