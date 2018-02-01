<?php
	header("Content-type:text/html;charset=utf-8;");
	/*
		array_diff_ukey() 通过回调函数的方式，返回一个数组在其他数组中不存在键名的数组元素

		array_diff_ukey() 通过回调函数的方式，返回一个数组在其他数组中不存在键名和键值的的数组元素
	*/

		function dump($arr){
			echo "<pre>";
			print_r($arr);
		}

		$arr1=array("weburl"=>"baidu","name"=>"kenyip");
		$arr2=array("url"=>"baidu","name"=>"kenyip");
		$arr3=array("url"=>"baidu");

		$arr0=array_diff_ukey($arr1,$arr2,a);

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
