<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('myaws');
		$this->load->library('activemq');
		$this->load->library('rackspace');
		
	}
	
	public function index()
	{					
		$this->load->view('home');		
	}
	
	public function upload()
	{
		$image_array = $_FILES['userfile']['tmp_name'];

		foreach ($image_array as $key=>$value)
		{
		  		
		  	// A unique id only to simulate a unique name for the image.
		  	$id = 'img_'.uniqid();
		  	
		  	// Image name/path.
		  	$image = $id.'.jpg';
		  	
		  	$body = fopen($_FILES['userfile']['tmp_name'][$key], 'r');
		  	
		  	// Uploading to Amazon S3 as PRIMARY
		  	$this->myaws->put_object(PRIMARY_BUCKET, $image, $body);
		  	
		  	// Uploading to Rackspace as PRIMARY
		  	//$this->rackspace->put_object(PRIMARY_BUCKET, $image, $body);
		  	
		  	//    OR UPLOADING TO GOOGLE AS PRIMARY
		  	
		  	// $this->google->........;

		  	// Feeding this to Active MQ
		  	//$message = PRIMARY_BUCKET.'|'.MIRRORS.'|'.$image;
		  	$m_array = array(
    			'primary' => PRIMARY_BUCKET,
    			'mirrors' => unserialize(MIRRORS),
    			'image' => $image
			);
			
		  	$message = json_encode($m_array);
		  	$this->activemq->send_message($message);
		  						  
		}  
				
		$this->load->view('home');
	}
		
}

