<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/**
 * Facebook API Library Class
 *
 * @package		Trivver
 * @subpackage	Libraries
 * @category	Social Class
 * @author		Leon DuPree
 * @link		http://trivver.net/user_guide/libraries/facebook.html
 */

class Fblib extends CI_Controller{
	
	var $CI;
	var $fb_sdk;
	
 	public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->config->item('facebook');
		$this->CI->load->library('social/sdk/facebook-php/facebook');
		$this->fb_model=$this->CI->load->model('facebook_model');
	 	$this->fb_sdk = new Facebook(
	 		array(
	    		'appId'=>$this->CI->config->item('appId'),
	    		'secret'=>$this->CI->config->item('secret')
			)
		);
    }
 	function friend_list()
	{		
		return $this->fb_model->friend_list();
	}
	
}



/* End of file ./application/libraries/social/Fblib.php */