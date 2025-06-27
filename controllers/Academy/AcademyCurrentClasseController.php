<?php
class AcademyCurrentClasseController extends Controller{
	public function __construct(){
		$this->module="Academy";
	}
	public function index(){
		$this->view();
	}
	public function create(){
		$this->view();
	}
public function save($data,$file){
	global $now;
	if(isset($data->create)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$academycurrentclasse=new AcademyCurrentClasse();
		$academycurrentclasse->name=$data->name;

			$academycurrentclasse->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyCurrentClasse::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$academycurrentclasse=new AcademyCurrentClasse();
			$academycurrentclasse->id=$data->id;
		$academycurrentclasse->name=$data->name;

		$academycurrentclasse->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		$this->view();
	}
	public function delete($id){
		AcademyCurrentClasse::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyCurrentClasse::find($id));
	}
}
?>
