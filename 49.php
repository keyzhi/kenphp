<?php
/*�����  http://www.houdunwang.com
	2011-3-16 ����04:40:07
*/

/*class db {
	private $mysqli; //���ݿ�����
	private $options; //SQLѡ��
	private $tableName; //����
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


/*public   ���еģ����࣬���࣬�ⲿ���󶼿��Ե��� 
protected �ܱ����ģ����� ���࣬����ִ�У��ⲿ���󲻿��Ե��� 
private ˽�еģ�ֻ�ܱ���ִ�У��������ⲿ���󶼲��ɵ��� */
