<?php
class AcademyRoutineController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->academy_class_id)){
		$errors["academy_class_id"]="Invalid academy_class_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_subject_id)){
		$errors["academy_subject_id"]="Invalid academy_subject_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_teacher_id)){
		$errors["academy_teacher_id"]="Invalid academy_teacher_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtDay"])){
		$errors["day"]="Invalid day";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTime"])){
		$errors["time"]="Invalid time";
	}

*/
		if(count($errors)==0){
			$academyroutine=new AcademyRoutine();
		$academyroutine->academy_class_id=$data->academy_class_id;
		$academyroutine->academy_subject_id=$data->academy_subject_id;
		$academyroutine->academy_teacher_id=$data->academy_teacher_id;
		$academyroutine->day=$data->day;
		$academyroutine->time=$data->time;

			$academyroutine->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyRoutine::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data->academy_class_id)){
		$errors["academy_class_id"]="Invalid academy_class_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_subject_id)){
		$errors["academy_subject_id"]="Invalid academy_subject_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_teacher_id)){
		$errors["academy_teacher_id"]="Invalid academy_teacher_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtDay"])){
		$errors["day"]="Invalid day";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTime"])){
		$errors["time"]="Invalid time";
	}

*/
		if(count($errors)==0){
			$academyroutine=new AcademyRoutine();
			$academyroutine->id=$data->id;
		$academyroutine->academy_class_id=$data->academy_class_id;
		$academyroutine->academy_subject_id=$data->academy_subject_id;
		$academyroutine->academy_teacher_id=$data->academy_teacher_id;
		$academyroutine->day=$data->day;
		$academyroutine->time=$data->time;

		$academyroutine->update();
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
		AcademyRoutine::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyRoutine::find($id));
	}
	public function routines(){
		$this->view();
	}
	public function routine($id){
		$this->view(["routine"=>AcademyClasse::find($id)]);
}
}
?>
