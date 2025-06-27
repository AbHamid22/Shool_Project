<?php
class AcademyTeacherController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtContactNo"])){
		$errors["contact_no"]="Invalid contact_no";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPosition"])){
		$errors["position"]="Invalid position";
	}

*/
		if(count($errors)==0){
			$academyteacher=new AcademyTeacher();
		$academyteacher->name=$data->name;
		$academyteacher->contact_no=$data->contact_no;
		$academyteacher->position=$data->position;

			$academyteacher->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyTeacher::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtContactNo"])){
		$errors["contact_no"]="Invalid contact_no";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPosition"])){
		$errors["position"]="Invalid position";
	}

*/
		if(count($errors)==0){
			$academyteacher=new AcademyTeacher();
			$academyteacher->id=$data->id;
		$academyteacher->name=$data->name;
		$academyteacher->contact_no=$data->contact_no;
		$academyteacher->position=$data->position;

		$academyteacher->update();
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
		AcademyTeacher::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyTeacher::find($id));
	}
}
?>
