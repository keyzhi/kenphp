<?php
	header("Content-type:text/html;charset=utf-8;");
	/*
		函数
			一部分可以重复执行的代码，多次执行一次编译
			特点:
			1 减少程序运行的复杂性
			2 提高程序的可靠性
			3 提高软件的开发效率
			4 提高程序的维护性
			5 提高程序的重复性

		语法:
			function 函数名(参数1,参数2){
				代码段....
				return 返回值;
			}

			函数名(参数1,参数2);
			注意:函数定义了3个参数,但是只传2个参数的话，会报错
			函数可以在定义之前调用
	*/

			$bbs_url="http://www.baidu.com";
			echo substr($bbs_url,7);

			function say($name){
				echo  "<h1 style='color:#aaa'>".$name."</h1><br/>";
			};

			say('ken');
			//function_exists是检测ss函数是否存在
			// var_dump(function_exists(ss));

			if(function_exists(say)){
				say('kenyip');
			}
?>