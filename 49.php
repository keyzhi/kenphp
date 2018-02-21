<?php
/*后盾网  http://www.houdunwang.com
	2011-3-16 下午04:40:07
*/

/*class db {
	private $mysqli; //数据库连接
	private $options; //SQL选项
	private $tableName; //表名
	public function __construct($tabName) {
		$this->tableName = $tabName;
		$this->db ();
	}
	private function db() {
		$this->mysqli = new mysqli ( 'localhost', 'root', '', 'hdcms' );
		$this->mysqli->query("SET NAMES GBK");
	}
	public function fields($fildsArr) {
		if (empty ( $fildsArr )) {
			$this->options ['fields'] = '';
		}
		if (is_array ( $fildsArr )) {
			$this->options ['fields'] = implode ( ',', $fildsArr );
		} else {
			$this->options ['fields'] = $fildsArr;
		}
		return $this;
	}
	public function order($str) {
		$this->options ['order'] = "ORDER BY " . $str;
		return $this;
	}
	public function select() {
		$sql = "SELECT {$this->options['fields']} FROM {$this->tableName}  {$this->options['order']}";
		return $this->query ( $sql );
	}
	private function query($sql) {
		$result = $this->mysqli
			->query ( $sql );
		$rows = array ();
		while ( $row = $result->fetch_assoc () ) {
			$rows [] = $row;
		}
		return $rows;
	}
	private function close() {
		$this->mysqli
			->close ();
	}
	function __destruct() {
		$this->close ();
	}
}
$chanel = new db ( "hdw_channel" );
$chanelInfo = $chanel->fields ( 'id,cname,cpath' )
	->select ();
echo "<pre>";
print_r ( $chanelInfo );*/

/*class a {
	protected  function aa(){
		echo 222;
	}
}
class b extends a{
	function bb(){
		$this->aa();
	}
}
$c = new b();
$c->bb();*/


/*public   公有的：本类，子类，外部对象都可以调用 
protected 受保护的：本类 子类，可以执行，外部对象不可以调用 
private 私有的：只能本类执行，子类与外部对象都不可调用 */
