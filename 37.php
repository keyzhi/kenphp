<?php

	/*
		each() 返回数组中的键名和键值，生成新数组，如果指针结束，返回布尔假false

		list() 将索引数组的值赋给变量

		array_map() 数组的每一个元素，都惊回调函数处理，返回值是处理过的元素组成的新数组

		array_walk() 数组中的每一个元素，应用回调函数，成功返回真TRUE，失败返回假FALSE

		array_walk_recursive 递归的操作数组，使数组中的元素应用回调函数
	*/

	
		$arr1=array("weburl"=>"baidu","name"=>"kenyip","qq"=>"492831394");
	/*	
		$array_new=each($arr1);
		print_r($array_new);
		echo "<br/>";
		$array_new=each($arr1);
		print_r($array_new);
		echo "<br/>";
		$array_new=each($arr1);
		print_r($array_new);
		echo "<br/>";
		$array_new=each($arr1);
		print_r($array_new);
		echo "<br/>";
		var_dump($array_new);
	*/
		/*

		while(list($k,$v)=each($arr1)){
			echo "键名:".$k."=>键值：".$v."<br/>";
		}
		*/
/*
		$arr1=array("11","22","1000","500","99");
		$arr2=array("a","b","c","d","e");
		// function func($v){
		// 	if($v>100){
		// 		return $v;
		// 	}
		// }
		// $arr_new=array_map('func',$arr1);
		function func($arr1,$arr2){
			return array($arr2=>$arr1);
		}
		$arr_new=array_map('func',$arr1,$arr2);
		echo "<pre>";
		print_r($arr_new);
*/

/*
		$arr3=array("ken"=>5555,"kenzhi"=>6666,"kenyip"=>7777);
		function funk(&$v,$k){
			if($v<6000){
				$v+=500;
			}
		}
		if(array_walk($arr3,'funk')){
			echo "成功";
			print_r($arr3);
		}
*/

		$arr5=array(
				array("name"=>"张三","money"=>"1000"),
				array("name"=>"李四","money"=>"1500"),
				array("name"=>"王五","money"=>"2000")
		);

		array_walk_recursive($arr5,"a");
		function a(&$v,$k){
			if($k==="money" && $v<2000){
				$v+=1000;
			}
		}

		echo "<pre>";
		print_r($arr5);