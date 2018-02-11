<?php
	header("Content-type:text/html;charset=utf-8;");
/*
	compact()  将多个变量转化为数组，变量名为数组键名 变量值为数组的键值

	extract()   将数组转化为变量 键名为变量名 键值为变量值

	in_array() 判断元素是否存在于数组当中，如果加参数TRUE,同时进行数据类型的判断，返回BOOL类型值

*/

/*
	$name="bd";
	$url="baidu";
	$pwd="123";
	// $arr1=compact("name","url","pwd");
	// print_r($arr1);
	$hd=array("name","url","pwd");
	$arr1=compact($hd);
	print_r($arr1);

*/

/*
	$hd=array("name"=>"bd","url"=>"baidu","pwd"=>"123","kenyip");
	// 如果索引数组，用EXTR_PREFIX_ALL给所有变量加前，并且要加上下划线
	var_dump(extract($hd,EXTR_PREFIX_ALL,'hdw'));
	echo $hdw_name ."<br/>";
	echo $hdw_0;
	*/

	$arr1=array(1,2,3,4);
	echo in_array('1',$arr1,TRUE)?"元素存在于数组当中":"元素不在数组中";