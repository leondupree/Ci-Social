<?php
/*
|--------------------------------------------------------------------------
| Facebook Application Model
|--------------------------------------------------------------------------
|       
*/

class Json_model extends CI_Model {
    
	
    function __construct(){
    	parent::__construct();
    }

	function json_write($x)
    {
    	$this->output->set_content_type('application/json')->set_output(json_encode($x));
	}
	function json_read($x)
	{
		return json_decode(file_get_contents($x),true); 	
	}
	
	
}