<?php
/*
   sort() 对数组元素进行递增的排序
   
   natsort() 通过自然顺序对数组进行排序

   shuffle() 随机对数组进行排序

   natcaseoft()  不区分字符大小写进行排序
*/

echo "<pre>";
$arr1=array(1,2,3,22,78,5,90,20);
$arr2=array("class1","class2","class12","class32","class21");
// sort($arr1);
// natsort($arr2);
// print_r($arr1);
// print_r($arr2);

/*
$arr3=array(1,2,3);

shuffle($arr3);

foreach($arr3 as $k=>$v){
	echo $k."=>".$v."<br>";
}
*/

/*

$arr4=array("a","b","c","A","B","C");
natcasesort($arr4);
print_r($arr4);

*/
// SORT_DESC进行倒序
// SORT_ASC 升序
$arr5=array(2,1,3);
$arr6=array(6,5,4);
// array_multisort($arr1,SORT_DESC);
array_multisort($arr5,SORT_ASC,$arr6);
print_r($arr5);
echo "<br>=================<br>";

print_r($arr6);
