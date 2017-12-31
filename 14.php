<?php
	header("Content-type:text/html;charset=utf-8");
	/*
		switch语句

			switch(表达式){
				case 值1:...
				break;
				case 值2:...
				break;
				case 值3:...
				break;
				default:
				....
			}

			1.金牌  2.银牌 3.铜牌  4.免费
	*/

			$user=1;
			switch($user){
				case 1:
					echo "金牌";
				break;
				case 2:
					echo "银牌";
				break;
				case 1:
					echo "铜牌";
				break;
				default:
					echo "免费";
			}
?>