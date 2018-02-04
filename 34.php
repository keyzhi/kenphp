<?php
	header("Content-type:text/html;charset=utf-8");
/*
	array_fill() 通过制定的索引顺序及个数生产数组

	array_filter() 数组过滤函数，通过回调函数的方式返回新数组，如果回调函数返回TRUE，数组元素返回新数组当中

	array_flip()  把数组中的键名与键值进行交换

	array_key_exists() 判断内容是否是数组的键名

	array_keys() 返回数组中所有键名
*/

	function dump($arr){
		echo "<pre>";
		print_r($arr);
	}
/*
	$arr0=array_fill(30,2,"网易");
	dump($arr0);
*/
	/*
	$arr1=array("class1"=>"PHP课程","class2"=>"mysql课程","name"=>"后盾");
	//strpos 查找 "php" 在字符串中第一次出现的位置：
	$arr0=array_filter($arr1,"a");
	function a($v){
		if(strpos($v,"课程")){
			return true;
		}
	}
	 dump($arr0);
	*/

/*
	$user1=array("uname"=>"渣渣辉","msg"=>"枪支联系电话");
	if(array_filter($user1,"b")){
		echo "包含非法信息";
	}else{
		echo "保存成功";
	}

	function b($v){
		if(strpos($v,"枪支")){
			return true;
		}

	}
*/

/*
// $arr1=array("class1"=>"PHP课程","class2"=>"mysql课程","name"=>"后盾");
$arr1=array("class1"=>"PHP","class2"=>"PHP","name"=>"后盾");
$arr0=array_flip($arr1);
dump($arr0);
*/

$arr1=array("class1"=>"PHP","class2"=>"PHP","name"=>"后盾");
// if(array_key_exists("class1",$arr1)){
// 	echo "存在";
// };
// $arr0=array_keys($arr1);
$arr0=array_keys($arr1,"PHP");
dump($arr0);


