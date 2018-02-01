<?php
	/*
		in_array() 判断内容是否在数组中

		array_search() 查找内容是否为数组的键值，存在返回键名，不存在返回false
		
		array_change_key_case() 更改数组键名大小写

		array_chunk() 将数组进行拆分

		array_combine() 将两个数组组成一个数组，但两个数组元素个数必须一样，否则出错

		array_diff() 返回在其他数组不存在的键值

		array_diff_key() 返回在其他数组不存在的键名

		array_diff_assoc() 返回在其他数组不存在的键名+键值
	*/

		/*
			$arr=array(1,2,3,4);
			if(in_array(1,$arr,true)){
				echo "存在";
			}
		*/
		/*
			$arr2=array("PHP","JS","CSS");
			$k=array_search('JS',$arr2);
			echo $k;
		*/
			function dump($arr){
				echo "<pre>";
				print_r($arr);
			}
			/*
			$arr3=array("URL"=>"百度","class"=>"PHP");
			$arr0=array_change_key_case($arr3,CASE_UPPER);

			dump($arr0);
			*/
			/*
			$arr4=array("Url"=>"百度","class1"=>"PHP","class2"=>"Js","class3"=>"css","class4"=>"mysql","class5"=>"Thinkphp");
			$arr0=array_chunk($arr4,3,true);
			dump($arr0);
			*/
			/*
			$arr5a=array('url','webname');
			$arr5b=array('baidu','百度');
			$arr0=array_combine($arr5a,$arr5b);
			dump($arr0);
			*/
			/*
			$arr6a=array('baidu.com','bbs.baidu','163.com');

			$arr6b=array('sina.com','bbs.baidu','163.com');
			$c=array('sina.com');

			// $arr0=array_diff($arr6b,$arr6a);
			$arr0=array_diff($arr6b,$arr6a,$c);
			dump($arr0);
			*/
			/*
			$arr71=array("url"=>"baidu","name"=>"ken");
			$arr72=array("weburl"=>"baidu","name"=>"ken");
			$arr0=array_diff_key($arr71,$arr72);
			dump($arr0);
			*/

			$arr81=array("url"=>"baidu","name"=>"ken2");
			$arr82=array("weburl"=>"baidu","name"=>"ken");
			$arr0=array_diff_assoc($arr81,$arr82);
			dump($arr0);