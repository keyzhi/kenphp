<?php
	header("Content-type:text/html;charset=utf-8");
	/*
		字符串输出
			echo()输出一个或多个字符串，
			echo运营速度优于print
			print()输出字符串,只能输出一个字符串
			printf()格式化输入字符串
		字符串的截取
		 	substr()对字符串进行指定数量的截取	
			strchr() 查找一个字符串在另一个字符串中第一次出现(从前面开始查找) strstr别名 判断一个字符串是否在另一个字符串中出现过，是则返回后者的字符串，否则返回false,区分大小写，但stristr()不区分大小写
			strrchr()从头查找一个字符串在另一个字符串中最后出现(从后面开始查找)
			strpos()查找一个字符串在另一个字符串第一次出现的位置,区分大小写 
			stripos()不区分大小写
			strrpos()从后查找一个字符串在另一个字符串第一次出现的位置
			strtok()通过字符串把主字符串拆分成数组
			parse_str()把字符串截取为变量
			chunk_split把字符串按指定大小拆分
	*/		
			$bbs="kenbbs";
			$name="kenyip";
			$num="452";
			$num2="125";
			// printf("%f",$num);
			// printf("欢迎来%f到kenyip%f世界",$num,$num2);
			// %1\.3f表示浮点型(小数位为3的，如果是%1\.2f，小数位为2)，%1\$u表示整型，而且不能在单引号内，因为里面有$符号，单引号不能正常解析 
			/*
				printf("欢迎来%1\$.3f到kenyip%1\$u世界",$num);
			*/
			/*
				$url="www.baidu.com";
				$str=substr($url,-3,2);
				echo $str;
			

				$bbs1="世界欢迎来到kenyip世界";
				$abc="abcdefg";
				$str0=stristr($abc,"Bc");
				$str1=strchr($bbs1,"欢迎");	
				// var_dump($str1);
				$str2=strrchr($bbs1,"世界");
				$str3=strpos($bbs1,"ken");
				$str4="PHP,JS,CSS,HTML";
				$s=strtok($str4,',');
				
				while($s!==false){
					echo $s;
					echo "<br/>-------------<br/>";
					$s=strtok(",");
				}
				// var_dump($str2);
				// echo $str3;
			
				$url2="http:www.baidu.com?uname=ken&age=25&sex=boy";
				$ur_msg=substr($url2,(strpos($url2,"?")+1));
				// echo $ur_msg;
				parse_str($ur_msg);
				echo "欢迎来到ken世界<br/>用户名:".$uname."<br/>年龄为:{$age}<br/>性别:{$sex}";
			*/
			$str6="PHP,JS,CSS,HTML";
			echo chunk_split($str6,3,"||");
?>			