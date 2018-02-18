<?php
	/*
		range()  生成包含指定范围的数组，第三个参数是步长值

		array_count_values() 统计数组中值出现的次数，返回统计的数组

		array_pad() 对数组进行填充，第二个参数如果是负数，从左侧添加，正数为右侧，第三个参数为填充内容

		array_product() 对数组中的键值进行乘积的运算，返回数值类型
	*/
		echo "<pre>";
		/*

		// $arr1=range(1,10);
		$arr1=range(1,10,2);
		echo "<pre>";
		print_r($arr1);

		*/

/*
$arr2=array("qq","ken","taobao","163","wechat","qq","taobao");

$arr3=array_count_values($arr2);
echo "<pre>";
print_r($arr3);
*/

/*
$arr4=array(1,3,4);
$newArr=array_pad($arr4,5,"9");
print_r($newArr);
*/

$arr5=array(1,2,3,4);
var_dump(array_product($arr5));