<?php
	header("Content-type:text/html;charset=utf-8;");
	/*
		代码重用
		include() require()载入文件
		include() 如果载入的文件不存在，提示警告错误，程序还可以继续执行
		require() 如果载入的文件不存在，致命性错误，程序终止，不继续执行
		include_once() require_once()载入文件
		只载入一次文件，如果此文件载入过，将不再载入

	*/
		/*

		
		include("21_1.php");
		// require("21_1.php");
		say("ken");
	*/
		require("21_head.php");
?>