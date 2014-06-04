<?php
/*
|--------------------------------------------------------------------------
| Opem Object Protocol Application Model
|--------------------------------------------------------------------------
|       
*/

class Ogp_model extends CI_Model {
    function __construct(){
    	parent::__construct();
    }
    
    function get_meta($obj_id)
    {
    	// Need a data source: html(output from class) would be best however xml or database may be ideal depending on usage discussion. 
    	
    	$arr= array(
    		'209Z7'=>array(
	    		'fb:app_id'=>$this->fb_app_id,
				'og:title'=>'Praesent pretium suscipit',
				'og:description'=>'Proin ut est non augue tincidunt rutrum. In scelerisque arcu vel leo egestas, quis tincidunt tellus adipiscing. Donec sodales vel justo in adipiscing.',
				'og:type'=>'object',
				'og:url'=>$this->host['og'].'209Z7/',
				'og:image'=>$this->host['img'].'objects/209Z7.png',
	    		'og:image:type'=>'image/png',
    			'og:image:width'=>'319',
    			'og:image:height'=>'400'
	    	),
	    	'525A6'=>array(
	    		'fb:app_id'=>$this->fb_app_id,
				'og:title'=>'Sed nec mauris lorem',
				'og:description'=>'Donec fringilla massa nec aliquet pretium. Praesent sit amet velit et tellus consequat vehicula.Nam fringilla dolor arcu, vel commodo tortor viverra et.',
				'og:type'=>'object',
				'og:url'=>$this->host['og'].'525A6/',
				'og:image'=>$this->host['img'].'objects/525A6.jpg',
    			'og:image:type'=>'image/jpg',
    			'og:image:width'=>'640',
    			'og:image:height'=>'428'
	    	),
	    	'531K2'=>array(
	    		'fb:app_id'=>$this->fb_app_id,
				'og:title'=>'Proin vulputate',
				'og:description'=>'Curabitur volutpat velit velit, ac iaculis neque pellentesque sit amet. Nunc tincidunt nisi posuere suscipit pharetra.',
				'og:type'=>'object',
				'og:url'=>$this->host['og'].'531K2/',
				'og:image'=>$this->host['img'].'objects/531K2.png',
	    		'og:image:type'=>'image/png',
    			'og:image:width'=>'250',
    			'og:image:height'=>'284'
	    	),
	    	'641B9'=>array(
				'fb:app_id'=>$this->fb_app_id,
				'og:title'=>'Cras lobortis urna hed',
				'og:description'=>'Phasellus posuere posuere nibh, et faucibus mi commodo vitae. Mauris commodo, nulla id dictum auctor, lectus augue molestie leo, id cursus libero nulla congue purus.',
				'og:type'=>'object',
				'og:url'=>$this->host['og'].'641B9/',
				'og:image'=>$this->host['img'].'objects/641B9.jpg',
    			'og:image:type'=>'image/jpg',
    			'og:image:width'=>'625',
    			'og:image:height'=>'417'
	    	),
	    	'772C0'=>array(
				'fb:app_id'=>$this->fb_app_id,
				'og:title'=>'Cras lobortis urna hed',
				'og:description'=>'Phasellus posuere posuere nibh, et faucibus mi commodo vitae. Mauris commodo, nulla id dictum auctor, lectus augue molestie leo, id cursus libero nulla congue purus.',
				'og:type'=>'object',
				'og:url'=>$this->host['og'].'772C0/',
				'og:image'=>$this->host['img'].'objects/772C0.jpg',
    			'og:image:type'=>'image/jpg',
    			'og:image:width'=>'600',
    			'og:image:height'=>'653'
	    	),
	    	'781G3'=>array(
				'fb:app_id'=>$this->fb_app_id,
				'og:title'=>'Cras lobortis urna',
				'og:description'=>'Phasellus posuere posuere nibh, et faucibus mi commodo vitae. Mauris commodo, nulla id dictum auctor, lectus augue molestie leo, id cursus libero nulla congue purus.',
				'og:type'=>'object',
				'og:url'=>$this->host['og'].'781G3/',
				'og:image'=>$this->host['img'].'objects/781G3.png',
    			'og:image:type'=>'image/png',
    			'og:image:width'=>'138',
    			'og:image:height'=>'300'
	    	)
	    	
    	);
    	if(isset($arr[$obj_id])){
    		return $arr[$obj_id];
    	}
    	else{
    		return false;
    	}
    }
    
}
