<?php 

class Rasa {
	
	private $conn;
	private $tb_name = "tb_rasa";

	public $id;
	public $keterangan;

	public function __construct($db)
	{
	 	$this->conn = $db;
	}

	function viewRasa(){
		$query = "SELECT * FROM ".$this->tb_name." ORDER BY keterangan";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function insertRasa($ket){
		$query = "INSERT INTO ".$this->tb_name." (keterangan) VALUES (:keterangan) ";
		$stmt = $this->conn->prepare($query);
		$stmt->bindparam(':keterangan',$ket);
		$stmt->execute();
		return true;	
	} 
	
}

?>