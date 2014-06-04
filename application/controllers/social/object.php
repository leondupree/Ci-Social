<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Social Object API Class
 *
 * @package		Trivver
 * @subpackage	Controller
 * @category	Social Class
 * @author		Leon DuPree
 * @link		http://trivver.net/user_guide/libraries/facebook.html
 */

class Object extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->uid=$this->fblib->fb_uid;
		$this->login=$this->fblib->fb_login_url;
		$this->logout=$this->fblib->fb_logout_url;
		$this->app_id=$this->fblib->getAppId();
		
		if($this->uid){$this->status= true;} else{$this->status= false;}
	}
	
	public function create()
	{
		
	}
				
	public function update()
	{
		
	}
	
	public function delete()
	{
		
	}
	
	public function like()
	{
		
	}
	
	public function invite()
	{
	
	}
	
	public function feed()
	{
	
	}
	

}

/* End of file object.php */
/* Location: ./application/controllers/social/object.php */