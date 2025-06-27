<?php
class AcademyStudentController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtFathersName"])){
		$errors["fathers_name"]="Invalid fathers_name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtMothersName"])){
		$errors["mothers_name"]="Invalid mothers_name";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_batch_id)){
		$errors["academy_batch_id"]="Invalid academy_batch_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->dob)){
		$errors["dob"]="Invalid dob";
	}
	if(!preg_match("/^[\s\S]+$/",$data->photo)){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtContactNo"])){
		$errors["contact_no"]="Invalid contact_no";
	}
	if(!preg_match("/^[\s\S]+$/",$data->address)){
		$errors["address"]="Invalid address";
	}

*/
		if(count($errors)==0){
			$academystudent=new AcademyStudent();
		$academystudent->name=$data->name;
		$academystudent->fathers_name=$data->fathers_name;
		$academystudent->mothers_name=$data->mothers_name;
		$academystudent->academy_batch_id=$data->academy_batch_id;
		$academystudent->created_at=$now;
		$academystudent->dob=$data->dob;
		$academystudent->photo=File::upload($file->photo, "img",$data->id);
		$academystudent->contact_no=$data->contact_no;
		$academystudent->address=$data->address;

			$academystudent->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyStudent::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtFathersName"])){
		$errors["fathers_name"]="Invalid fathers_name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtMothersName"])){
		$errors["mothers_name"]="Invalid mothers_name";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_batch_id)){
		$errors["academy_batch_id"]="Invalid academy_batch_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->dob)){
		$errors["dob"]="Invalid dob";
	}
	if(!preg_match("/^[\s\S]+$/",$data->photo)){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtContactNo"])){
		$errors["contact_no"]="Invalid contact_no";
	}
	if(!preg_match("/^[\s\S]+$/",$data->address)){
		$errors["address"]="Invalid address";
	}

*/
		if(count($errors)==0){
			$academystudent=new AcademyStudent();
			$academystudent->id=$data->id;
		$academystudent->name=$data->name;
		$academystudent->fathers_name=$data->fathers_name;
		$academystudent->mothers_name=$data->mothers_name;
		$academystudent->academy_batch_id=$data->academy_batch_id;
		$academystudent->created_at=$now;
		$academystudent->dob=$data->dob;
		if($file->photo->name!=""){
			$academystudent->photo=File::upload($file->photo, "img",$data->id);
		}else{
			$academystudent->photo=AcademyStudent::find($data->id)->photo;
		}
		$academystudent->contact_no=$data->contact_no;
		$academystudent->address=$data->address;

		$academystudent->update();
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
		AcademyStudent::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyStudent::find($id));
	}
}
?>
