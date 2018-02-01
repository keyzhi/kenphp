<?php
	/*
		addslashes()预定义的字符串前添加反斜杠
		stripslashes() 把转义字符串前的反斜杠删除
		get_magic_quotes_gpc() 获得PHP.INI中是否开启自动转义
	*/
		// var_dump(get_magic_quotes_gpc());
		if(get_magic_quotes_gpc()){
			$cname=addslashes($_GET['cname']);
		}else{
			// $cname=$_GET['cname'];
			// -------------------------
			//输入'php',结果就变成了 \'php'\ 
			 $cname=addslashes($_GET['cname']);
		}
		echo $cname."<br/>";
		echo stripslashes($cname);

?>
	<form method="get" action="">
		课程名 <input type="text" name="cname"> <br/>
		<input type="submit" name="提交">
	</form>