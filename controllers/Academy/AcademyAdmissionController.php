<?php
class AcademyAdmissionController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->academy_student_id)){
		$errors["academy_student_id"]="Invalid academy_student_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_batch_id)){
		$errors["academy_batch_id"]="Invalid academy_batch_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_section_id)){
		$errors["academy_section_id"]="Invalid academy_section_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->roll)){
		$errors["roll"]="Invalid roll";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_class_id)){
		$errors["academy_class_id"]="Invalid academy_class_id";
	}

*/
		if(count($errors)==0){
			$academyadmission=new AcademyAdmission();
		$academyadmission->academy_student_id=$data->academy_student_id;
		$academyadmission->academy_batch_id=$data->academy_batch_id;
		$academyadmission->academy_section_id=$data->academy_section_id;
		$academyadmission->created_at=$now;
		$academyadmission->roll=$data->roll;
		$academyadmission->academy_class_id=$data->academy_class_id;

			$academyadmission->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyAdmission::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data->academy_student_id)){
		$errors["academy_student_id"]="Invalid academy_student_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_batch_id)){
		$errors["academy_batch_id"]="Invalid academy_batch_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_section_id)){
		$errors["academy_section_id"]="Invalid academy_section_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->roll)){
		$errors["roll"]="Invalid roll";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_class_id)){
		$errors["academy_class_id"]="Invalid academy_class_id";
	}

*/
		if(count($errors)==0){
			$academyadmission=new AcademyAdmission();
			$academyadmission->id=$data->id;
		$academyadmission->academy_student_id=$data->academy_student_id;
		$academyadmission->academy_batch_id=$data->academy_batch_id;
		$academyadmission->academy_section_id=$data->academy_section_id;
		$academyadmission->created_at=$now;
		$academyadmission->roll=$data->roll;
		$academyadmission->academy_class_id=$data->academy_class_id;

		$academyadmission->update();
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
		AcademyAdmission::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyAdmission::find($id));
	}
}
?>
