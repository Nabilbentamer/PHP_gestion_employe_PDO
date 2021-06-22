<?php 

class model{

	private $conn;

	public function __construct(){

		// etablir une connection avec la base de donnée souhaité 

		$this->conn=new PDO('mysql:host=localhost;dbname=grh','root','');
	}



	public function All_Employe(){

		$query = 'SELECT * FROM EMPLOYES';	
		$statement = $this->conn->prepare($query);
		$statement->execute();

		return $statement->fetchAll();

	}

	public function Delete_Employe($code){

		echo"ok";
		$query = 'DELETE FROM employes WHERE code=?';
		$statement = $this->conn->prepare($query);
		$statement->execute(array($code));

	}

}

?>