<?php
class AcademyPeriodController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTime"])){
		$errors["time"]="Invalid time";
	}

*/
		if(count($errors)==0){
			$academyperiod=new AcademyPeriod();
		$academyperiod->name=$data->name;
		$academyperiod->time=$data->time;

			$academyperiod->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(AcademyPeriod::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtTime"])){
		$errors["time"]="Invalid time";
	}

*/
		if(count($errors)==0){
			$academyperiod=new AcademyPeriod();
			$academyperiod->id=$data->id;
		$academyperiod->name=$data->name;
		$academyperiod->time=$data->time;

		$academyperiod->update();
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
		AcademyPeriod::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(AcademyPeriod::find($id));
	}
}
?>
