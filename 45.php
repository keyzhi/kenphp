<?php

header("Content-type:text/html;charset=utf-8;"); 
/*
	asort() 对数组按键值排序，保留键名

	ksort() 对数组按键名排序，保留键名

	rsort() 对数组进行反向排序，不保留键名

	arsort() 对数组进行反向排序，保留键名

	krsort() 对数组的键名进行反向排序，保留键名
*/
echo "<pre>";
$array=array(
	"bbs"=>"bbs.hd",
	"web"=>"baidu.com",
	"bbsname"=>"hd论坛",
	"webname"=>"百度"
);
// sort($array);
// asort($array);
// ksort($array);
// rsort($array);
// arsort($array);
krsort($array);
print_r($array);