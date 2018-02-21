<?php
	header("Content-type:text/html;charset=utf-8;");
	/**/

	class Pc{
		public $yianse;
		public $pinpai;
		function  game(){
			echo "玩游戏";
		}
		function online(){
			echo "上网";
		}
		function music(){
			echo "听歌";
		}
	}

	$hd_pc=new Pc();
	$hd_pc->pinpai ="IBM";
	$hd_pc->yanse ="黑色";
	$hd_pc->game();
	$zs=new Pc();
	$zs->pinpai="SONY";
	$zs->yanse ="红色";
	$zs ->music();