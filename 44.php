<?php
	/*
		usort() 通过自定义函数对数组进行排序，原数组索引不保留

		uasort() 通过自定义函数对数组进行排序，保留原数组索引

		uksort() 通过自定义函数对数组的键名进行排序
	*/
    echo "<pre>";
	$array=array("5"=>5,"7"=>7,"3"=>3,"4"=>4,"6"=>6,"1"=>1,"9"=>9);
/*
	function func($v1,$v2){
		if($v1==$v2)
			return 0;
		return $v1>$v2?1:-1;
	}

	var_dump(usort($array,"func"));

	print_r($array);

	*/

/*
	function func($v1,$v2){
		if($v1==$v2)
			return 0;
		return $v1>$v2?1:-1;
	}

	var_dump(uasort($array,"func"));

	print_r($array);

	*/

$array1=array("15"=>5,"27"=>7,"33"=>3,"44"=>4,"56"=>6,"61"=>1,"79"=>9);
function func($v1,$v2){
	echo $v1."=>".$v2;
	echo "<br>";
		if($v1==$v2)
			return 0;
		return $v1>$v2?1:-1;
	}

	var_dump(uksort($array1,"func"));

	print_r($array1);