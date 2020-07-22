<?php

	$name = $_REQUEST['Name'];
	$email = $_REQUEST['Email'];
	$message = $_REQUEST['Message'];


	if(empty($name) || empty($email) || empty($message))
	{
		echo "Please Fill All The Fields";
	}
	else
	{
		mail("mywebsite2142@gmail.com","ShoeShop", $message , "From: $name <$email>");

		echo "<script type='text/javascript'>alert('Your Message Sent Successfully');

		window.history.log(-1);

		</script>";

	}

?>