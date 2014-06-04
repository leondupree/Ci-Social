<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Trivver.net - Sub-Domain Pointers
|--------------------------------------------------------------------------
|
| Triiver.net domain pointer for sub-domains
| 
|
*/
	$config['triv_hosts']=array(
		'img'=>'http://img.trivver.net/',
		'js'=>'http://js.trivver.net/',
		'css'=>'http://css.trivver.net/',
		'api'=>'http://api.trivver.net/',
		'admin'=>'http://admin.trivver.net/',
		'og'=>'http://og.trivver.net/',
		'default'=>'http://trivver.net/'
	);

/*
|--------------------------------------------------------------------------
| trivver.php config local short hand variables
|--------------------------------------------------------------------------
|
| Used only for local variables within this file
| to ease the amount of code.
|
*/
	$u_css = $config['triv_hosts']['css'];
	$u_js = $config['triv_hosts']['js'];
	$u_img = $config['triv_hosts']['img'];
/*
|--------------------------------------------------------------------------
| Trivver.net - Header
|--------------------------------------------------------------------------
|
| Triiver.net header settings. default will be the default item unless 
| redefined by another array. 
|
*/
	$config['triv_default_title']='Trivver Website';
	$config['triv_default_meta']=array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => 'Trivver gaming description'),
        array('name' => 'keywords', 'content' => 'gaming, advertisement,social,facebook'),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1'),
        array('name' => 'viewport', 'content' => 'width=device-width'),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
	);
	$config['triv_default_css']=array(
    	array('href'=>$u_css.'default.css','rel' => 'stylesheet','type' => 'text/css', 'media' => 'all')	
	);
	$config['triv_default_js']=array(
		array('src'=>'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'),
		array('src'=>$u_js.'default.js')
	);
	$config['triv_default_ico']= array( $u_img.'favicon.ico', 'shortcut icon', 'image/ico');
/*
|--------------------------------------------------------------------------
| Trivver.net - Main Navigation
|--------------------------------------------------------------------------
|
| Triiver.net main navigation config.
|
*/
	$config['triv_main_nav']=array(
		array(
			'label'=>'home',
			'href'=>'/',
			'icon'=>'home'
		),
		array(
			'label'=>'jobs',
			'href'=>'/about-us/jobs/',
			'icon'=>'jobs'
		),
		array(
			'label'=>'contact',
			'href'=>'/about-us/contact-us/',
			'icon'=>'contact'
		),
		array(
			'label'=>'blog',
			'href'=>'/about-us/blog/',
			'icon'=>'blog'
		),
		array(
			'label'=>'media kit',
			'href'=>'/about-us/media-kit/',
			'icon'=>'media'
		)
	);
/*
|--------------------------------------------------------------------------
| Trivver.net - Advertisement User Account Navigation
|--------------------------------------------------------------------------
|
| Triiver.net main sub level navigation config for advertiser's user account.
| 
|
*/
	$config['user_adver_nav']=array(
		array(
			'label'=>'create campaign',
			'href'=>'/account/create-campaign/',
			'icon'=>'create'
		),
		array(
			'label'=>'my campaigns',
			'href'=>'/account/my-campaigns/',
			'icon'=>'campaigns'
		),
		array(
			'label'=>'my library',
			'href'=>'/account/my-library/',
			'icon'=>'library'
		),
		array(
			'label'=>'upload',
			'href'=>'/account/upload/',
			'icon'=>'upload'
		),
		array(
			'label'=>'game list',
			'href'=>'/account/game-list/',
			'icon'=>'game_list'
		)
	);	
/*
|--------------------------------------------------------------------------
| Trivver.net - Footer Navigation
|--------------------------------------------------------------------------
|
| 
|
*/	
	$config['footer_nav']=array(
		array(
			'header'=>'main',
			'list'=>array(
				array('label'=>'home','href'=>'/'),
				array('label'=>'jobs','href'=>'/about-us/jobs/'),
				array('label'=>'contact','href'=>'/about-us/contact-us/'),
				array('label'=>'blog','href'=>'/about-us/blog/'),
				array('label'=>'media kit','href'=>'/about-us/media-kit/')
			)
		),
		array(
			'header'=>'users',
			'list'=>array(
				array('label'=>'lorem ipsum','href'=>'/users/account/lorem-ipsum/'),
				array('label'=>'deum dolores','href'=>'/users/account/deum-dolores/'),
				array('label'=>'conseqiutar','href'=>'/users/account/conseqiutar/')
			)
		),
		array(
			'header'=>'developers',
			'list'=>array(
				array('label'=>'consequitar','href'=>'/developers/account/consequitar/'),
				array('label'=>'sempre','href'=>'/developers/account/sempre/'),
				array('label'=>'soliuqa elit','href'=>'/developers/account/soliuqa-elit/'),
				array('label'=>'sicum','href'=>'/developers/account/sicum/')
			)
		),
		array(
			'header'=>'advertisers',
			'list'=>array(
				array('label'=>'create campaign','href'=>'/advertisers/account/create-campaign/'),
				array('label'=>'my campaigns','href'=>'/advertisers/account/my-campaigns/'),
				array('label'=>'my library','href'=>'/advertisers/account/my-library/'),
				array('label'=>'upload','href'=>'/advertisers/account/upload/'),
				array('label'=>'game list','href'=>'/advertisers/account/game-list/')
				
			)
		)
	);