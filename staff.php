<?php
class Staff{
	private $conn;

	public $id;
	public $hoten;
	public $chucvu;
	public $luong;
	public $diachi;
	public $email;

	//connect db
	public function __construct($db){
		$this->conn = $db;
	}

	//read
	public function read(){
		$query = "SELECT * FROM t_staff  ORDER BY id DESC";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
	public function show(){
		$query = "SELECT * FROM t_staff WHERE id=?  LIMIT 1 ";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->hoten = $row['hoten'];
		$this->chucvu = $row['chucvu'];
		$this->luong = $row['luong'];
		$this->diachi = $row['diachi'];
		$this->email = $row['email'];
	}

	//create data
	public function create(){
		$query = "INSERT INTO t_staff SET hoten=:hoten, chucvu=:chucvu, luong=:luong, diachi=:diachi,email=:email";
		$stmt = $this->conn->prepare($query);

		//clean data
		$this->hoten = htmlspecialchars(strip_tags($this->hoten));
		$this->chucvu = htmlspecialchars(strip_tags($this->chucvu));
		$this->luong = htmlspecialchars(strip_tags($this->luong));
		$this->diachi = htmlspecialchars(strip_tags($this->diachi));
		$this->email= htmlspecialchars(strip_tags($this->email));

		$stmt->bindParam(':hoten',$this->hoten);
		$stmt->bindParam(':chucvu',$this->chucvu);
		$stmt->bindParam(':luong',$this->luong);
		$stmt->bindParam(':diachi',$this->diachi);
		$stmt->bindParam(':email',$this->email);

		if($stmt->execute()){
			return true;
		}
		printf("Error %s.\n" ,$stmt->error);
		return false;
	}

	public function update(){
		$query = "UPDATE t_staff SET hoten=:hoten, chucvu=:chucvu, luong=:luong, diachi=:diachi,email=:email WHERE id=:id";
		$stmt = $this->conn->prepare($query);

		//clean data
		$this->hoten = htmlspecialchars(strip_tags($this->hoten));
		$this->chucvu = htmlspecialchars(strip_tags($this->chucvu));
		$this->luong = htmlspecialchars(strip_tags($this->luong));
		$this->diachi = htmlspecialchars(strip_tags($this->diachi));
		$this->email= htmlspecialchars(strip_tags($this->email));
		$this->id= htmlspecialchars(strip_tags($this->id));


		$stmt->bindParam(':hoten',$this->hoten);
		$stmt->bindParam(':chucvu',$this->chucvu);
		$stmt->bindParam(':luong',$this->luong);
		$stmt->bindParam(':diachi',$this->diachi);
		$stmt->bindParam(':email',$this->email);
		$stmt->bindParam(':id',$this->id);

		if($stmt->execute()){
			return true;
		}
		printf("Error %s.\n" ,$stmt->error);
		return false;
	}

	public function delete(){
		$query = "DELETE FROM t_staff WHERE id=:id";
		$stmt = $this->conn->prepare($query);

		//clean data
		$this->id= htmlspecialchars(strip_tags($this->id));

		$stmt->bindParam(':id',$this->id);

		if($stmt->execute()){
			return true;
		}
		printf("Error %s.\n" ,$stmt->error);
		return false;
	}


	}
?>