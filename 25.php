<?php
	header("Content-type:text/html;charset=utf-8");
		/*
			1.字符串替换函数
				str_replace() 区分大小写	
				str_ireplace() 不区分大小写
				可以数组和字符串进行替换
				-------------------------------
				strtr() 替换字符串中任意字符
			2.字符串比较函数
				strcmp() 比较字符串，如果相等返回0，如果字符串1<字符串2，返回-1，如果字符串1>字符串2，返回1；区分大小写
				strcasecmp() 不区分大小写，不按自然数进行比较，如"10"和"2"，返回-1
				strnatcmp()按自然数进行比较
				strncmp()指定位数进行字符串比较
				similar_text()比较两个字符串有多少字符相等，第三个参数返回一个变量，为两个字符串相似的百分比
			3.字符串统计函数
				substr_count() 查找一个字符串在另一个字符串出现的次数，可以指定查找位置和查找长度
			$url="百度网www.baidu.com,查找资料请找百度baidu.com";
			//将$url里的b全部替换成B
			// $str=str_replace("b","B",$url);、
			$arr0=array("欢迎来到ken世界,请上www.baidu.com搜索");
			$arr1=array("b","a","c");
			$arr2=array("B","A","C");
			// $k代表替换了多少次
			// $str=str_replace($arr1,$arr2,$url,$k);
			// echo $str."<br/>";
			$str=str_replace($arr1,$arr2,$arr0,$k);
			print_r($str);
			echo "<br/>";
			echo $k;
		

			// echo strcmp("kenyip","kenyip"); 返回0
			// echo strcasecmp("kenyip","Kenyip");返回0
			// echo strcasecmp("10","2");返回-1
			// echo strnatcmp("10","2");返回1
			// 指定前三位数进行比较
			// echo strncmp("1001","1002",3);返回0


			echo "有多少相等:".similar_text("kenyip","kenzhi",$v);
			echo "<br/>".$v;
			
			//将百度里面的bai替换成BAI
			// echo strtr("www.baidu.com","bai","BAI");

			$arr4=array("b"=>"B","a"=>"A","i"=>"I");
			echo strtr("www.baidu.com",$arr4);
		*/
			$str4="后盾网www.houdunwang.com,后盾网论坛bbs.houdunwang.com";
			echo substr_count($str4,"houdunwang",20);
?>	