<?php
	header("Content-type:text/html;charset=utf-8;");
/*
	对象释放
	1.脚本执行完后，释放对象
	2.删除对象的引用，释放对象

*/
/*
class TV{
	public $color;
	public $pinpai;
	function __construct(){

	}
	function watch(){
		echo "看电视";
	}

	function __destruct(){
		echo "释放对象";
	}
}

$d1=new TV();
// unset($d1);
echo "<br>====================<br/>";
/*

/*
	面向对象变成特性:抽象 封装 继承 多态

	抽象: 把一类对的共同属性和方法抽象出来，形成类，这种思考方式就是抽象
	
	封装: 把成员方法和成员属性封装到类中，隐藏属性和方法，隐藏方法实现的细节，通过public protected private final static 限定类成员的访问权限，数据被保护在内部，只有通过被授权的成员方法才可以操作。尽可能的对成员进行封装。

	继承: 可以使一个类继承并拥有另一个已经存在的类的成员属性和方法，被继承的类称为父类或基类，继承类为子类。extends 关键字 实现继承关系

	多态:子类继承父类，通过对父类的方法重写实现多态
*/

	class Arc{
		function del($id){
			echo "删除文章{$id}";
		}

		function edit($id){
			echo "编辑文章{id}";
		}
	}

	class AcrInfo extends Arc{

	}

	class ArcNews extends Arc{

		 function del($id){
		 	parent::del(100);
		 	echo "<br>删除主表文章{$id}<br>";
		 	echo "删除附表文章{$id}";
		 }
	}


	$info =new AcrInfo();

	// $info->del(2);

	$arc=new ArcNews();
	$arc->del(3);