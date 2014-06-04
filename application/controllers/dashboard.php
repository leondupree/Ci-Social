<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

/*
|--------------------------------------------------------------------------
|  Application Dashboarsd
|--------------------------------------------------------------------------
| 
|        
*/  
	var $header_data;
	var $body_data;
	var $footer_data;
	var $header_config;
	var $page;
	var $ogp;
	var $fb_app_id;
	var $links;
	var $meta;
	var $fb_obj;
	var $fb;
	var $host;
	
	public function __construct()
	{
		parent::__construct();
		$this->fb_app_id=$this->config->item('appId');
		$this->host=$this->config->item('triv_hosts');
		$this->meta=array(
			'default'=>$this->config->item('triv_default_meta')
		);
		$this->fb_obj = $this->fblib->fb_sdk;
		$this->fb=array(
			'url'=>array(
				'login'=>'https://www.facebook.com/dialog/oauth?app_id=404461492983805&redirect_uri=http://trivver.net',
				'logout'=>$this->fb_obj->getLogoutUrl(),
				'status'=>$this->fb_obj->getLoginStatusUrl()
			),
			'user'=>$this->fb_obj->getUser()
		);
		
		
	}
	public function view($p = 'home')
	{
        $this->page=$p;
		$this->header_data=array(
			'title'=>$this->config->item('triv_default_title'). nbs(1) . ucwords(str_replace("_", " ", ucfirst($this->page))),
			'meta'=>$this->meta,
			'host'=>$this->host
		);
		$this->body_data = array(
			'fb'=>$this->fb
		);
		$this->footer_data='';
		$this->load->view('panels/header',$this->header_data);
		$this->load->view('pages/'.$this->page,$this->body_data);
		$this->load->view('panels/footer',$this->footer_data);
	}
	public function ogp($obj_id='')
	{
		$this->load->model('ogp_model');
		if($this->ogp_model->get_meta($obj_id) != false){
			$data=array(
				'host'=>$this->host,
				'meta'=>$this->ogp_model->get_meta($obj_id),
				'obj_id'=>$obj_id
			);
			$this->load->view('output/ogp',$data);
		}
		else{
			$this->error();
		}
	}
	
	function error(){
		header("Location: http://trivver.net/");
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */