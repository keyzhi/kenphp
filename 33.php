<?php
	header("Content-type:text/html;charset=utf-8;");
	/*
		array_diff_ukey() 通过回调函数的方式，返回一个数组在其他数组中不存在键名的数组元素

		array_diff_uassoc() 通过回调函数的方式，返回一个数组在其他数组中不存在键名和键值的的数组元素

		array_intersect()   在两个或者多个数组当中，返回键值都存在的，数组元素(第一个数组)，不管键名相不相同

		array_intersect_key()  在两个或者多个数组当中，返回键名都存在的，数组元素(第一个数组)，不管键值相不相同

		array_intersect_assoc() 在两个或者多个数组当中，返回键名和键值都存在的，数组元素(第一个数组)

		array_intersect_ukey() 通过回调函数的方式，返回第一个数组的键名在其他数组当中同时存在的数组元素

		array_intersect_uassoc() 通过回调函数的方式，返回第一个数组的键名和键值在其他数组当中同时存在的数组元素
	*/

		function dump($arr){
			echo "<pre>";
			print_r($arr);
		}

		$arr1=array("weburl"=>"baidu","name"=>"kenyip");
		$arr2=array("url"=>"baidu","name"=>"kenyip");
		$arr3=array("url"=>"baidu");
		/*
		$arr0=array_diff_uassoc($arr1,$arr2,"a");

		function a($k1,$k2){
			if($k1===$k2){
				return 0;
			}elseif($k1>$k2){
				return 1;
			}else{
				return -1;
			}
		}
		dump($arr0);

		*/
		/*
		// $arr0=array_intersect($arr1,$arr2,$arr3);
		// $arr0=array_intersect_key($arr1,$arr2);
		$arr0=array_intersect_assoc($arr1,$arr2);
		dump($arr0);
		*/

		// $arr0=array_intersect_ukey($arr1,$arr2,"a");
		$arr0=array_intersect_uassoc($arr1,$arr2,"a");
		function a($k1,$k2){
			if($k1===$k2){
				return 0;
			}elseif($k1>$k2){
				return 1;
			}else{
				return -1;
			}
		}
		dump($arr0);