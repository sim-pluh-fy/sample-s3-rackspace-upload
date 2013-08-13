<?php

// Include the rackspack SDK classes
require_once FCPATH.'rackspace/lib/php-opencloud.php';


class Rackspace 
{
	
	
	function put_object ($container,$image,$body)				
	{
		
		// establish our credentials
		$connection = new \OpenCloud\Rackspace(RACKSPACE_US,
			array( 'username' => RACK_USERNAME,
		   		   'apiKey' => RACK_APIKEY 
		   	));
		
		// Connect to Rackspace Cloud files in Chicago region.
		$objstore = $connection->ObjectStore('cloudFiles', 'ORD');
		$cont = $objstore->Container($container);


		$mypicture = $cont->DataObject();
		$mypicture->SetData($body);
		$mypicture->name = $image;
		$mypicture->content_type = 'image/jpeg';
		$mypicture->Create();

	}
	
	

}
?>