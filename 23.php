<?php
	header("Content-type:text/html;charset=utf-8;");
	/*
		字符串处理函数:
			PHP处理字符串的空格
				strlen 	  字符串的长度
				trim      对字符串左右空格删除
				ltrim     对字符串左侧空格删除
				rtrim     对字符串右侧空格删除

			对字符串大小写的处理
				strtolower  将字符串转换才小写
				strtoupper  将字符串转换成大写
				ucfirst     首字母大写
				ucwords     单词首字母大写

			字符串填充函数
				str_pad("字符串",新字符串的长度,"添加的内容",填充的方向)
					当新字符串的长度比原字符串的长度小时，不执行
					填充的方向:默认向右侧填充
								STR_PAD_BOTH 左右两侧进行填充,如果填充为技术,右侧多填
							    STR_PAD_LEFT  左侧填充
							    STR_PAD_RIGHT 右侧填充

			字符串翻转函数
				strrev

			md5加密
				md5()

			格式化金额字符串函数
				number_format("字符串",小数位数，小数点，千位分隔符);

			字符串拆分成数组
				explode("用于在那个字符串进行拆分","拆分的字符串","返回数组元素的数目");

			把数组原始组合成字符串
				implode("连接字符串","数组");

	*/
		$arr2=array("百度","阿里巴巴","腾讯");
		$str2=implode(',',$arr2);
		var_dump($str2);
		
		/*
			$str="太币价格涨至1045.08美元，首次突破了，1000美元大关，触及历史新高。";
			$arr=explode('，',$str,2);
			print_r($arr);
			$money="1234567890123456";
			echo number_format($money,3)."<br>";

			$name=" kenyip ";
			echo strlen($name);
			echo "<br/>---------------------------------<br/>";
			echo strlen(trim($name));
		
			echo $name;
			echo "<br/>---------------------------------<br/>";
			//大写
			echo strtoupper(trim($name));
		*/
		/*	
			$url="www.baidu.com";
			echo "原字符串长度为:".strlen($url)."<br/>";
			echo $url;
			echo "<br/>---------------------------------<br/>";
			$new_url=str_pad($url,35,'+',STR_PAD_BOTH);
			echo "新长度为:".strlen($new_url)."<br/>";
			echo $new_url;
		*/
		/*
			$edu="study";
			echo strrev($edu);	
		*/

			// $pwd="kenzhi";
			// echo md5($pwd);
			if(md5($_GET['pwd'])=='dd5811fb77e4d0de154f66dbf48b5ee8'){
				echo "密码正确";
			}else{
?>

				<form action="" method="get">
					用户名:<input type="text" name="uname"/><br>
					密码:<input type="password" name="pwd"><br>
					<input type="submit" value="登录">
				</form>
<?php
				}
?>