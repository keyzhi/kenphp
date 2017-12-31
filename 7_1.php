<?php
	header("Content-type: text/html; charset=utf-8");
	$uname=empty($_POST['uname'])?"没有姓名":$_POST["uname"];
	$age=empty($_POST['age'])?"没有年龄":$_POST["age"];
	$tel=empty($_POST['tel'])?"没有电话":$_POST["tel"];
	$address=empty($_POST['address'])?"没有地址":$_POST["address"];
	$msg=empty($_POST['msg'])?"没有自我评价":$_POST["msg"];
	$qq=empty($_POST['qq'])?"没有qq":$_POST["qq"];
	
	echo $uname."</br>";
	echo $age."</br>";
	echo $tel."</br>";
	echo $address."</br>";
	echo $qq."</br>";
	echo $msg."</br>";


	
?>