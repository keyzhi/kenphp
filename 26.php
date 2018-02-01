<?php
	/*
		字符串处理函数
			parse_url() 解析URL，返回其组成部分

			urlencode() url编码

			urldecode()url解码

			htmlentities 将字符串转化为html实体
				1参数:操作内容  2:转化规则 ENT_COMPAT(只转化双引号)
				ENT_QUOTES(转换单双引号) 
				ENT_NOQUOTES(不转换任何引号)

			htmlspecialchars 将字符串转化为html实体,不会对中文进行转换

			htmlspecialchars_decode()去掉html实体化
			
		$url="http://www.baidu.com/admin/index.php?uname=kenyip&age=25&sex=man";
		$arr=parse_url($url);
		echo "<pre>";
		print_r($arr);

		// echo "<br>".parse_url($url,PHP_URL_HOST);
		echo "<br>".parse_url($url,PHP_URL_PATH);
	
		$str="PHP课程";
		$str1="PHP课程&divcss";
		echo "<a href='26.php?h=".urlencode($str1)."'>PHP<a/>";
		echo $_GET['h'];
	
		$str="学习课程";
		echo urlencode($str)."<br/>";
		echo urldecode(urlencode($str));
	*/
		// $str4="<h1>PHP课程<h1/>";
		// echo $str4."<br/>";
		// $str4='www.baidu.com"ken"';
		// echo $str4."<br/>";
		// echo htmlentities($str4,ENT_COMPAT);
		$str5='www.baidu.com视频学习';
		echo $str5."<br/>";
		echo htmlentities($str5,ENT_COMPAT);