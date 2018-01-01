<?php
	header("Content-type:text/html;charset=utf-8;");
	/*
		变量的作用范围
		静态变量
			static
				1 是在所有对函数调用中共享
				2 只有在第一次调用的时候赋值
				3传值 传址
	*/
			/*
				$bbs='ken';
				function say(){
					//PHP中，如果要函数里面的变量影响的全局变量，有一种方法是在函数里面加：global 变量名 ;
					global $bbs;
					$bbs='kenyip<br/>';
					//卸载了函数体内的变量
					unset($bbs);
					// echo $bbs;
				}
				say();
				echo $bbs;
			*/

		/*
				// 让全局数组格式化		
				echo "<pre>";
				// 打印全局数组
				print_r($GLOBALS);
		*/
		/*
			function hou(){
				//static $i=1 是第一次调用hou()函数时，调用，在后面第二第三次或以上再调用hou()时，就不调用$i=1了
				static $i=1;
				$i++;
				echo $i."<br/>";
			}
			hou();
			hou();
			hou();
			hou();
			hou();
			hou();
		*/	
			//在函数的参数上加上&，就变成传址了，传址会影响的全局变量的值
		function eat(&$name){
			$name=$name."man";
			echo $name.'在吃饭<br/>';
		}
		$name='ken';
		eat($name);
		echo $name;
?>