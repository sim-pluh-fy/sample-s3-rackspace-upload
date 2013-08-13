<?php

include_once FCPATH.'vendor/autoload.php';
use Aws\Common\Aws;

class Myaws 
{ 

 	private $aws;
    private $s3Client;
    public $debug=false;
    
    function __construct()
    {
    
        $this->aws = Aws::factory(array(
          'key'    => AWS_KEY,
          'secret' => AWS_SECRECT,
          'region' => 'us-east-1'
        ));
      
        $this->s3Client = $this->aws->get('s3');
        
    }
    
    // Upload S3 object
    function put_object($bucket_name, $key, $body)
    {
            $this->s3Client->putObject(array(
                'Bucket'=> $bucket_name,
                'Key'   => $key,
                'Body'  => $body
            ));
            return true;

    }
    
}    
    
?>