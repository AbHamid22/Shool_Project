<?php
class AcademyBatcheController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->current_class_id)){
		$errors["current_class_id"]="Invalid current_class_id";
	}

*/
		if(count($errors)==0){
			$academybatche=new AcademyBatche();
		$academybatche->name=$data->name;
		$academybatche->current_class_id=$data->current_class_id;

			$academybatche->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyBatche::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data->current_class_id)){
		$errors["current_class_id"]="Invalid current_class_id";
	}

*/
		if(count($errors)==0){
			$academybatche=new AcademyBatche();
			$academybatche->id=$data->id;
		$academybatche->name=$data->name;
		$academybatche->current_class_id=$data->current_class_id;

		$academybatche->update();
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
		AcademyBatche::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyBatche::find($id));
	}
}
?>
