<?php
class AcademyAttendanceController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->present_id)){
		$errors["present_id"]="Invalid present_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$academyattendance=new AcademyAttendance();
		$academyattendance->academy_student_id=$data->academy_student_id;
		$academyattendance->date=date("Y-m-d",strtotime($data->date));
		$academyattendance->present_id=$data->present_id;
		$academyattendance->status=$data->status;

			$academyattendance->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyAttendance::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data->academy_student_id)){
		$errors["academy_student_id"]="Invalid academy_student_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->present_id)){
		$errors["present_id"]="Invalid present_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$academyattendance=new AcademyAttendance();
			$academyattendance->id=$data->id;
		$academyattendance->academy_student_id=$data->academy_student_id;
		$academyattendance->date=date("Y-m-d",strtotime($data->date));
		$academyattendance->present_id=$data->present_id;
		$academyattendance->status=$data->status;

		$academyattendance->update();
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
		AcademyAttendance::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyAttendance::find($id));
	}

	public function attendance($id){
		$this->view(AcademyAttendance::find($id));
	}
}
?>
