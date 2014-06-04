<?php 
	$json_string = 'test.json';
	$jsondata = file_get_contents($json_string);
	$obj = json_decode($jsondata,true);
	echo "<pre>";
	print_r($obj);
?>