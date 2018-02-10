<?php
	header("Content-type:text/html;charset=utf-8;");

	/*
		array_unique() 清除数组中的重复项

		array_unshift() 向数组顶部追加数据元素

		array_shift() 删除数组第一个元素，如果删除失败返回null

		array_pop() 删除数组最后一个元素

		array_keys() 得到数组的键名，并以数组形式返回

		array_values() 得到数组的键值，以数组形式返回
	*/
/*
		$arr1=array("苹果","桃子","梨","苹果","桃子","梨");

		$shop=array_unique($arr1);

		foreach($shop as $v){
			echo "</br><b>{$v}</b>:&nbsp;&nbsp;数量:<input type='text'><br/>";
		}
*/
    /*
		$arr1=array("苹果","桃子","梨","苹果","桃子","梨");

		if(array_unshift($arr1,"葡萄")){
			echo "追加成功";
		}
     */
		/*
		$arr1=array("0","桃子","梨");
		if(!is_null(@array_shift($arr1))){
			echo "删除成功";
		}

		print_r($arr1);
		*/

	/*
		$arr1=array("0","桃子","梨");
		var_dump(array_pop($arr1));
		//当知道数组个数时可以用unset，通过下标删除数组元素
		unset($arr1[2]);
		print_r($arr1);
	*/

		$arr2=array("weburl"=>"baidu","name"=>"kenyip","qq"=>"492831394","msg"=>"skdjfklasdfgpasjg");

		$keys=array_keys($arr2);
		// print_r($keys);

		$values=array_values($arr2);
		// print_r($values);
		$fil="";
		$val="";
		foreach($keys as $v){
			$fil.="'".$v ."',";
		}
		$fil=rtrim($fil,",");
		echo $fil;

		foreach($values as $v){
			$val.="'".$v."',";
		}
		$val=rtrim($val,",");
		echo $val;

