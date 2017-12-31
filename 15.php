<?php
	header("Content-type:text/html;charser=utf-8");
	/*
		循环结构
			while(){
	
			}
	*/
			$i=1;
			while($i<=9){
				$j=1;
				while($j<=$i){
					echo $i."*".$j."=".$i*$j."\t";
					$j++;
				}
				echo "<br/>";
				$i++;
			}
?>