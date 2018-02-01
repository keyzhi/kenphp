<?php
	/*
		count() 统计数字中元素的个数
		reset() 把数组内部指针移动到数组第一个元素，并返回元素值

		end() 把数组内部指针移动到数组最后一个元素，并返回元素值
		
		prev() 把数组指针向上移动一位，并返回当前值，
		next() 把数组指针向下移动一位，并返回当前值，如果到结尾返回false，如果当前元素的值为空或者0，返回false

		current() 返回当前指针指向的数组元素,如果当前元素为空返回false

		key()  返回当前指针指向元素的键名
	*/
		echo "<pre>";
	/*
		$arr=array("baidu","PHP",array("JS","css"));

		echo count($arr);
		echo count($arr,1);
	*/
	
	$arr2=array("baidu","PHP","JS",0,"css");
	/*
	do{
		echo current($arr2)."<br/>";
	}while(next($arr2));
	*/
	/*
	while(list($k,$v)=each($arr2)){
		echo $v."<br/>";
	}
	*/

	$arr3=array('weburl'=>'baidu','webuser'=>'ken');
	echo key($arr3)."<br/>";
	next($arr3);
	echo key($arr3);