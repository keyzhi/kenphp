<?php
	header("Content-type:text/html;charset=utf-8");

	/*
		array_reduce() 用回调函数递归的对数组元素进行处理，返回处理后的值	
		
		array_slice()  截取指定范围的数组元素,第2个参数截取开始位置，第3个截取长度，第四个是否保留数字索引值

		array_splice() 删除指定范围的数组元素，如果指定第4个参数，则在删除元素位置放入第四个参数的值

		array_sum() 对数组中的值进行求和运算

		array_product() 对数组中的值进行乘积运算
	*/
$array=array(1,2,3,4,5);
/*
	
	function func($c,$i){
		 $c*=$i;
		 echo $c."<br>";
		return $c;
	}
  //设func的$c为1，如果不设第三参数，默认func的$c为0
	array_reduce($array, "func",1);
*/

	/*

	

	// 从下标为2开始截取,第三参数是截取多少个，第四参数加上true即是保留索引
	// 当第二参数是负数，即取绝对值，从右边数起，开始截取 如：-2 ，从4开始截取
	$newArray=array_slice($array,2,2,true);
	print_r($newArray);
	echo "<br>=================================<br/>";
	print_r($array);
	*/

/*
	$result=array_splice($array,2,1,array("ken"));
	print_r($result);
	echo "<br>=================================<br/>";
	print_r($array);
*/

	$array4=array(1,2,3,10);
	echo array_sum($array4);
	echo "<br>=================================<br/>";
	echo array_product($array4);




