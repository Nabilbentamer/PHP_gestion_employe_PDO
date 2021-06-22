<?php 

require_once 'model.php';


class controler {

	private $model;

	public function __construct(){

		$this->model = new model();

	}

	public function All_Employes(){

		$employes = $this->model->All_Employe();
		require 'allEmploy.php';

	}

	public function delEmploye(){
		$code = $_Get['code'];
		$this->model->Delete_Employe($code);
		echo "ol";
		//header('location:controler.php');
	}


	public function Action(){

		$action='All';

		if(isset($_Get['action'])){
			$action=$_Get['action'];
		}

		switch($action){
			case 'All':
			$this->All_Employes();
			break;

			case 'del':
			$this->delEmploye();
			break;

		}



	}


}

$c = new controler();
$c->Action();

?>
