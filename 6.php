<?php
	header("Content-type: text/html; charset=utf-8");
		/*
			PHP是弱类型的语言
			getType(变量，常量);
			is_int()  is_float()  is_array()  is_object()  is_null()  is_resource() is_bool()
		*/
	// 	$ken=array('JS','PHP');
	// 		// $ken="JS";
	// 	var_dump($ken);
	// 	// echo getType($ken);
	// 	 if(getType($ken)=='array'){
	// 		echo "<br/>这是一个数组。";



	// }

	/*
	define("URL",'1000');

	if(is_int(URL)){

		echo 1;
	}elseif (is_string(URL)) {
		echo 2;
	}
	*/

	$student=array('张三','李四','王五','赵六');

	if(is_array($student)){

		foreach($student as $key=>$value){
			echo "学员".$key."的姓名是".$value."<br/>";
		}
	}
?>