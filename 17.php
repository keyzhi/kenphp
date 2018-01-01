<?php
	header("Content-type:text/html;charset=utf-8;");
	/*
		break;

		语法结构：break int
		break 数字 :直接跳出几层循环
		continue 直接运行到循环体结尾
		continue 数字:跳出几层循环到循环体结尾

		exit  die  ：都是退出，一样的;

	*/
		/*
		$i=0;
		while($i++<10){
			echo '$i='.$i;
			$j=0;
			while($j++<5){
				if($j==2){
					// 退出两层循环
					break 2;
				}
				echo "&nbsp;&nbsp;$j=".$j;
			}
			echo "<br/>";
		}
		*/

		/*
		$k=0;
		while($k++<5){
			$e=0;
			if(++$e==2){
				continue;
			}
			echo '$k='.$k.'<br/>';
		}

		*/
	/*
		$a=0;
		while(++$a<3){
			while(++$b<4){
				if($b==2){
					continue 2;
				}
				echo '&nbsp;&nbsp;$b:'.$b;
			}
			$b=0;
			echo '$a:'.$a;
			echo "<br/>";
		}
		
			第一次：$a=1;
				二级while：$b=1 $b:1; $b=2;
			第二次:$a=2
				二级while:$b=3 $b:3;$b=4;
				输出$a=2
		*/
		// exit('退出');
		   die('退出');
		echo "kenyip";
?>