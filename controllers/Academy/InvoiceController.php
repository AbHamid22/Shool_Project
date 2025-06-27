<?php
class InvoiceController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->total)){
		$errors["total"]="Invalid total";
	}

*/
		if(count($errors)==0){
			$invoice=new Invoice();
		$invoice->academy_student_id=$data->academy_student_id;
		$invoice->issue_date=date("Y-m-d",strtotime($data->issue_date));
		$invoice->due_date=date("Y-m-d",strtotime($data->due_date));
		$invoice->total=$data->total;
		$invoice->created_at=$now;

			$invoice->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(Invoice::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data->academy_student_id)){
		$errors["academy_student_id"]="Invalid academy_student_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->total)){
		$errors["total"]="Invalid total";
	}

*/
		if(count($errors)==0){
			$invoice=new Invoice();
			$invoice->id=$data->id;
		$invoice->academy_student_id=$data->academy_student_id;
		$invoice->issue_date=date("Y-m-d",strtotime($data->issue_date));
		$invoice->due_date=date("Y-m-d",strtotime($data->due_date));
		$invoice->total=$data->total;
		$invoice->created_at=$now;

		$invoice->update();
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
		Invoice::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(Invoice::find($id));
	}
}
?>
