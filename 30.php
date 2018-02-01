<?php
	/*
		implode()  将数组转为字符串
		explode()  将字符串转为数组
		in_array() 检测内容是否在数组中
		each()	   把数组元素拆分成新的数组
		list()	   把数组元素赋值给变量，必须是索引数组，关联数组不可以
		each和list常配合使用
	*/

	// $arr=array('PHP','DIV','CSS','JQ','JS');
	// $str=implode(",",$arr);
	/*	
	echo "<pre>";
	$file=array('a1.jpg','a2.jpg','a3.jpg');
	print_r($file);
	$files=implode(',',$file);
	echo $files."<br/>";

	$arr2=explode(',',$files);
	print_r($arr2);
	
	$arr3=array(1,2,3,4);
	var_dump(in_array('1',$arr3));
	
	echo "<pre>";
	$arr4=array('url'=>'baidu.com','user'=>'kenyip');
	$arr4_1=each($arr4);
	print_r($arr4_1);
	$arr4_1=each($arr4);
	print_r($arr4_1);
	*/

	$arr5=array('url'=>'baidu.com','user'=>'kenyip');
	while(list($k,$v)=each($arr5)){
		echo $k."=>".$v;
		echo "<br/>";
	}


?>