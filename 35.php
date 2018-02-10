<?php

	header("Content-type:text/html;charset=utf-8;");
	/*
		array_udiff() 通过回调函数，比较2个或多个数组的差值，只比较值，不比较键名

		array_udiff_assoc() 通过回调函数，比较2个或多个数组的键名或键值差值

		array_udiff_uassoc() 通过回调函数，比较多个数组的键名和键值，要定义两个回调函数来处理键名和键值的比较

		array_uintersect() 通过回调函数 得到多个数组中键值的交集，不会比较键名。

		array_uintersect_assoc() 通过回调函数 得到多个数组中键值的交集，键名也会参与比较。

		array_uintersect_uassoc()通过两个回调函数,对多个数组的键值和键名进行比较,得到多个数组的交集元素
                                                                                                                                                                                                                                                                                                                                                                     
	*/

	function dump($arr){
		echo "<pre>";
		print_r($arr);
	}

	function c($v1,$v2){
		if($v1===$v2){
			return 0;
		}elseif($v1>$v2){
			return 1;
		}else{
			return -1;
		}
	}

	function fun_key($v1,$v2){
		if($v1===$v2){
			return 0;
		}elseif($v1>$v2){
			return 1;
		}else{
			return -1;
		}
	}
	
	$arr1=array("a"=>"a","b"=>"b","c"=>"c");
	$arr2=array("a2"=>"a","b"=>"b1","c"=>"c");
	/*
	$arr3=array_udiff($arr1,$arr2,"c");
	

	dump($arr3);
	*/
	/*
	$arr3=array_udiff_assoc($arr1,$arr2,"c");
	dump($arr3);
	*/
	/*
	$arr3=array_udiff_uassoc($arr1,$arr2,"c","fun_key");
	dump($arr3);
	*/
/*
	$arr3=array_uintersect($arr1,$arr2,"c");
	dump($arr3);
*/

	$arr3=array_uintersect_uassoc($arr1,$arr2,"c","fun_key");
	dump($arr3);