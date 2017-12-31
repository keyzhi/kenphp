<?php
//逻辑运算
	header("Content-type:text/html;charset=utf-8");

	$uname="admin";
	$upwd="123456";
	// 逻辑与
	// if($uname=="admin" && $upwd=="123456"){
	// 	echo "用户名与密码正确，登录成功";
	// }else{
	// 	echo "信息不正确";
	// }
	// 逻辑或
	// if($uname=="admin" || $upwd=="123"){
	// 	echo "用户名与密码正确，登录成功";

	// }else{

	// 	echo "信息不正确";
	// }

	// 逻辑非
	// $pwd=123456;
	// if(!is_string($pwd)){
	// 	echo 'ken';
	// }

	// 逻辑异或 xor 表达式左右两边只能一个为真才为真，其他情况为假
	$hou="123456";
	var_dump(isset($h) xor isset($hou));
?>