<?php
	header("Content-type:text/html;charset=utf-8;");
	/*
		$this：当前对象
	*/

	class Ren{
		public $tall;
		public $name;
		function __construct($x,$t){
			$this->name=$x;
			$this->tall=$t;
			
		}
		function speack(){
			echo $this->name."说话";
		}

	}

	$lihai=new Ren("李海","3m");
	$lihai->speack();

	// $xm=new Ren();
	// $xm ->name ="小明";
	// $xm ->tall="1.75";
	// echo $xm->name.$xm->tall;
	// echo "<br/>";