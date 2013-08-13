<?php

// Include the Stomp-PHP classes to use the 
// Stomp protocol
require_once FCPATH.'stomp/Stomp.php';


class Activemq 
{

	// This function pings the ActiveMQ server to send a message
	// each time an image is uploaded.
	
	function send_message ($message)				
	{
		$con = new Stomp('tcp://'.ACTIVEMQ_SERVER.':61613');
		$con->connect();
		$con->send("/queue/s3backup", $message);
	
	}


}

?>