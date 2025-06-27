<?php
class AcademyResultController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->academy_subject_id)){
		$errors["academy_subject_id"]="Invalid academy_subject_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_term_id)){
		$errors["academy_term_id"]="Invalid academy_term_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_exam_type_id)){
		$errors["academy_exam_type_id"]="Invalid academy_exam_type_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->mark)){
		$errors["mark"]="Invalid mark";
	}
	if(!preg_match("/^[\s\S]+$/",$data->fullmark)){
		$errors["fullmark"]="Invalid fullmark";
	}

*/
		if(count($errors)==0){
			$academyresult=new AcademyResult();
		$academyresult->academy_student_id=$data->academy_student_id;
		$academyresult->academy_subject_id=$data->academy_subject_id;
		$academyresult->academy_term_id=$data->academy_term_id;
		$academyresult->academy_exam_type_id=$data->academy_exam_type_id;
		$academyresult->mark=$data->mark;
		$academyresult->fullmark=$data->fullmark;

			$academyresult->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyResult::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data->academy_student_id)){
		$errors["academy_student_id"]="Invalid academy_student_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_subject_id)){
		$errors["academy_subject_id"]="Invalid academy_subject_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_term_id)){
		$errors["academy_term_id"]="Invalid academy_term_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->academy_exam_type_id)){
		$errors["academy_exam_type_id"]="Invalid academy_exam_type_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->mark)){
		$errors["mark"]="Invalid mark";
	}
	if(!preg_match("/^[\s\S]+$/",$data->fullmark)){
		$errors["fullmark"]="Invalid fullmark";
	}

*/
		if(count($errors)==0){
			$academyresult=new AcademyResult();
			$academyresult->id=$data->id;
		$academyresult->academy_student_id=$data->academy_student_id;
		$academyresult->academy_subject_id=$data->academy_subject_id;
		$academyresult->academy_term_id=$data->academy_term_id;
		$academyresult->academy_exam_type_id=$data->academy_exam_type_id;
		$academyresult->mark=$data->mark;
		$academyresult->fullmark=$data->fullmark;

		$academyresult->update();
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
		AcademyResult::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyResult::find($id));
	}

	public function reports(){
		$this->view();
	}

	public function report($id){
		$this->view(["student"=>AcademyStudent::find($id)]);
	}
}
?>
