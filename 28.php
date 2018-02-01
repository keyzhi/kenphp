<?php

	/*
		get_magic_quotes_runtime() 获得外部文件及数据库资料时是否进行转义

		set_magic_quotes_runtime()
		设置获得外部文件及数据库资料时是否进行转义
		1为是，0为否

		strip_tags()去除HTML XML PHP的标签
	*/
	/*
		set_magic_quotes_runtime(1);
		
		echo get_magic_quotes_runtime();
		echo "</br>";
		$mysqli=new mysqli('localhost','root','123456','edu');
		$mysqli->query('set names gbk');
		$sql="select * from user";
		$result=$mysqli->query($sql);
		while($row=$result->fetch_assoc()){
			echo "<pre>";
			print_r($row);
		}
	*/
		/*
		$file=fopen('28_1.txt',r);
		$con=fread($file,filesize('28_1.txt'));
		echo $con;
		*/

		$str="<div style='background-color:#000;height:150px;width:200px;color:#fff'><span style='color:#f00'>后盾网</span>视频教程,<b>PHP课程开讲</b></div>";
		echo $str;
		echo strip_tags($str,'<span><b>');