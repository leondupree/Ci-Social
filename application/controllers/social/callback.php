<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Social Callback API Class
 *
 * @package		Trivver
 * @subpackage	Controller
 * @category	Social Class
 * @author		Leon DuPree
 * @link		http://trivver.net/user_guide/libraries/facebook.html
 */

class Callback extends CI_Controller {
	
	
	var $json_post;
	var $smartObjexID;
	var $playerID; 
	var $gameID;
	var $obj_id='12345';
	var $token;
	var $auth;
	var $action;
	var $action_value;
	
	
	public function __construct()
	{
		parent::__construct();
	}

/*--------------------------------------------------------------------------
  Callback Methods
--------------------------------------------------------------------------*/  
	
	public function like()
	{	
		$this->action='like';
		$this->token='be1ab1632e4285edc3733b142935c60b';
		$this->authorize();
	}
	public function invite()
	{
		$this->action='invite';
		$this->token='f8f9a65ed8c3611b4ae9198b7c8a3702';
		$this->authorize();
	}
	public function invite_status()
	{
		$this->action='invite_status';
		$this->token='f56354d3aa99bd92dd1fbc630c23c5a9';
		$this->authorize();
	}
	public function feed()
	{  
		$this->action='feed';
		$this->token='09353387931db36c8af0e1b3658ddffe';
		$this->authorize();
	}
	public function user()
	{	
		$this->action='user';
		$this->token='ee11cbb19052e40b07aac0ca060c23ee';
		$this->authorize();
	}
	public function page()
	{	
		$this->action='page';
		$this->token='71860c77c6745379b0d44304d66b6a13';
		$this->authorize();
	}

/*--------------------------------------------------------------------------
  Callback Procedures
--------------------------------------------------------------------------*/ 
	 
	function process_results()
	{
		$arr=json_decode(file_get_contents("php://input"));
		$field_map=array(
			'like'=>'like',
			'obj_id'=>'object_id',
			'uid'=>'user_id',
			'username'=>'username'
		);
	}
	function authorize()
	{
		 if(isset($_GET['hub_mode'])){
		 	if($_GET['hub_verify_token'] == $this->token){
		 		echo $_GET['hub_challenge'];
		 	}
		 }
		 else if(file_get_contents("php://input")){	
		 	
		 	//$this->process_results();
		 	$this->transaction();
		 }
		 else{
		 	$this->error(); 
		 }
	}
	function error()
	{
		header("Location: http://trivver.net/");
	}
	function transaction()
	{
		
		/*
		$social=array(
			'smartObjexID'=>$this->smartObjexID,
			'playerID'=>$this->playerID,
			'gameID'=>$this->gameID,
			'facebook' =>array(
				'obj_id'=>$this->obj_id,
				$this->action=>array($this->action_value)
			)
		);
		*/
		
		$data = file_get_contents("php://input");
		$social = json_decode($data);
		/*
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($social));
			
		*/
		
		 write_file('/home/leondupree/trivver.net/json_docs/'.md5(date("YmdHis")).'.json',json_encode($social));

	}
}

/* End of file callback.php */
/* Location: ./application/controllers/social/callback.php */