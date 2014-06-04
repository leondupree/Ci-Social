<?php
/*
|--------------------------------------------------------------------------
| Facebook Application Model
|--------------------------------------------------------------------------
|       
*/

class Facebook_model extends CI_Model {
    
	var $social;
	var $smartObjexID;
	var $playerID;
	var $gameID;
	var $obj_id;
	var $invite;
	var $share;
	var $post;
	var $like;
	var $arr;

    function __construct(){
    	parent::__construct();
    }
/*
|--------------------------------------------------------------------------
| Facebook Core API Functions
|--------------------------------------------------------------------------
|		
*/
	function api($i)
	{
    	if($this->facebook->getUser()) {
			try {
				return $this->facebook->api($i['path'],$i['method'],$i['params']);
			}
			catch(FacebookApiException $e){
				return $e;
			}   
		}
    }
    function fql($q,$c='')
    {
    	if($this->facebook->getUser()) {
			try {
				return $this->facebook->api(array('method'=> 'fql.query','query'=> $q,'callback'=> $c));
			}
			catch(FacebookApiException $e){
				return $e;
			}   
		} 
    }
/*
|--------------------------------------------------------------------------
| Facebook Application Returns
|--------------------------------------------------------------------------
|       
*/
	function friend_list()
	{
		return $this->fql('SELECT uid,name,username,pic FROM user WHERE uid IN (SELECT uid2 FROM friend WHERE uid1 = me()) ORDER BY name ASC');	
	}	
}