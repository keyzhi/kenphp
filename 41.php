<?php
	header("Content-type:text/html;charset=utf-8;"); 

	/*
		array_push 在数组末端 增加一个或多个元素，入栈

		array_pop 删除数组末端元素 出栈

		array_rand 随机取得数组原，如果是取得多个元素返回一个元素索引的数组，单个只返回这个元素的索引

		array_reverse 反转数组的内容，如果第二个参数指定为TRUE，保留元素的键名
	*/

		echo "<pre>";

		$array=array("webname"=>"后盾","weburl"=>"houdunwang.com");
		array_push($array,"bbs.hd.com");
		print_r($array);