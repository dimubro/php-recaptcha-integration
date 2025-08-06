<?php 
	$response = $_POST['recaptcha_response'];

	$secret = 'SECRET';
	$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response");
	$captcha = json_decode($verify);
	
	if ($captcha->success) {
	    echo "okey";
	} else {
	    echo "fail";
	}
?>