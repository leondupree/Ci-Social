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

class Facebook extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->uid=$this->fblib->fb_uid;
		$this->login=$this->fblib->fb_login_url;
		$this->logout=$this->fblib->fb_logout_url;
		$this->app_id=$this->fblib->getAppId();
	}
					
	function create()
	{	
		$i['path']='app/objects/object';
		$i['method']='POST';
		$i['params']=array(			
			'app_id' => $this->app_id,
			'title' => $this->input->post('title'),
			'object'=>json_encode(
				array(
					'url' => $this->input->post('url'),
					'published_time'=>date("Y-m-d H:i:s"),
		    		'title' => $this->input->post('title'),
		    		'image' => $this->input->post('image'),
		    		'description' => $this->input->post('description')
				)
			)			
		);
	}
	
	function like($x)
	{	
		$i['path']='me/og.likes';
		$i['method']='POST';
		$i['params']=array(
		    'object'=>$x		
		);	
	}		
	function post($x)
	{
		$i['path']='/me/feed';
		$i['method']='POST';
		$i['params']= array(
			'message'=>$this->input->post('message'),
			'picture'=>$x['image'],
			'name'=> $this->input->post('name'),
			'link' =>  $this->input->post('link'),
			'caption'=> $this->input->post('caption'),
			'description'=>  $this->input->post('description'),
			'actions' => json_encode(
				array(
					'link'=>  $this->input->post('link'),
					'name' =>  $this->input->post('name'),
					'picture'=> $this->input->post('picture')
        		)
        	)
    	);		
	}		
	function share()
	{
		$i['path']='/'.$this->input->post('to').'/feed';
		$i['method']='POST';
		$i['params']=$this->input->post();
	}
}

/* End of file object.php */
/* Location: ./application/controllers/social/object.php */