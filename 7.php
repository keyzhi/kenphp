<?php
	header("Content-type: text/html; charset=utf-8");
		/*
			类型转换
			1.自由转换
			2.强制转换 $houdunwang="后盾网";$bbs=(array)$houdunwang;
			3.settype()作用于原变量;$name="ken";settype($name,'array');
			4.转换函数 转换后生成一个新变量，不影响原变量   intval()转整型  floatval()转浮点型  strval()转字符串型;
			只针对标量类型  int float string bool ,常量也只能是标量,对象和数组等不支持
		*/

			$a=500.22;
			$b=intval($a);
			var_dump($b);
			// var_dump($b);


?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>提交表单练习</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="7_1.php" method="post">
			姓名:<input type="text" name="uname"> <br>
			年龄:<input type="text" name="age"> <br>
			电话:<input type="text" name="tel"> <br>
			地址:<input type="text" name="address"> <br>
			QQ:<input type="text" name="qq"> <br>
			自我评价: 
			<textarea rows=10 cols=30 name="msg"></textarea> <br>
			<input type="submit" name="" value="提交"> &nbsp;&nbsp;
			<input type="reset" name="" value="重置">
		</form>
	</body>
	</html>