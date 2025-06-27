<?php
class AttendanceController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtRollNo"])){
		$errors["roll_no"]="Invalid roll_no";
	}
	if(!preg_match("/^[\s\S]+$/",$data->student_id)){
		$errors["student_id"]="Invalid student_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$attendance=new Attendance();
		$attendance->roll_no=$data->roll_no;
		$attendance->student_id=$data->student_id;
		$attendance->date=date("Y-m-d",strtotime($data->date));
		$attendance->status=$data->status;

			$attendance->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(Attendance::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtRollNo"])){
		$errors["roll_no"]="Invalid roll_no";
	}
	if(!preg_match("/^[\s\S]+$/",$data->student_id)){
		$errors["student_id"]="Invalid student_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$attendance=new Attendance();
			$attendance->id=$data->id;
		$attendance->roll_no=$data->roll_no;
		$attendance->student_id=$data->student_id;
		$attendance->date=date("Y-m-d",strtotime($data->date));
		$attendance->status=$data->status;

		$attendance->update();
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
		Attendance::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(Attendance::find($id));
	}
}
?>
