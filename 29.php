<?php
	/*
		数组：在一个变量中存储一个或者多个值，每一个元素都有一个访问的ID

		foreach( arr  as $key=>$value){}/foreach( arr as $value){}
	*/
	$arr=array('PHP','html','css');
	// print_r($arr);

	$arr1=array('uname'=>'ken','id'=>'1');
	// print_r($arr1);

	$arr2=array(array('uname'=>'ken','id'=>'1'),array('uname'=>'kenyip','id'=>'2'));
	print_r($arr2);	
?>