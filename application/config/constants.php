<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*
|--------------------------------------------------------------------------
| Define Primary S3 Bucket
|--------------------------------------------------------------------------
*/

define('PRIMARY_BUCKET', 'my-us-aws-bucket');
//define('PRIMARY_BUCKET', 'my-rks-bucket');
//define('PRIMARY_BUCKET', 'my-gs-bucket');

/*
|--------------------------------------------------------------------------
| Define One or more Mirror buckets 
|--------------------------------------------------------------------------
| [ add any or all of your Rackspace, Google or AWS buckets ]
*/

define('MIRRORS', serialize(array('my-gs-bucket'))); 
//define('MIRRORS', serialize(array('my-rks-bucket'))); 
//define('MIRRORS', serialize(array('my-rks-bucket','my-gs-bucket'))); 
//define('MIRRORS', serialize(array('my-us-aws-bucket','my-gs-bucket'))); 


/*
|--------------------------------------------------------------------------
| Define AWS, Google & Rackspace API Keys
|--------------------------------------------------------------------------
*/

define('RACK_USERNAME', '<rackspace username>');
define('RACK_APIKEY', '<rackspace key>');

define ('AWS_KEY', '<Amazon Key>');
define('AWS_SECRECT','<Amazon Secret Key>');

define ('GOOGLE_KEY', '<Google Key>');
define('GOOGLE_SECRECT','<Google Secret Key>');

/*
|--------------------------------------------------------------------------
| Define ActiveMQ server IP
|--------------------------------------------------------------------------
*/
define ('ACTIVEMQ_SERVER','<activemq server ip>');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */