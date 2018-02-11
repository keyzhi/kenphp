<?php
/*
	array_merge() 将多个数组合并，生成新数组

	array_merge_recursive() 将多个数组合并，如果键名相同，生成一个二维数组

	array_change_key_case() 将数组键名进行大小写转换
*/
	$arr1=array("WEBURL"=>"bbs.kenyip","webname"=>"ken");
	/*
	$arr2=array("db_hou"=>"localhost","db_user"=>"root","db_name"=>"hdw");
	$config=array_merge($arr1,$arr2);
	print_r($config);
	*/
	
	echo "<pre>";
	print_r(array_change_key_case($arr1,CASE_LOWER));
	