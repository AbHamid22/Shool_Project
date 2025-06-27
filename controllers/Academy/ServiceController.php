<?php
class ServiceController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->amount)){
		$errors["amount"]="Invalid amount";
	}

*/
		if(count($errors)==0){
			$service=new Service();
		$service->name=$data->name;
		$service->amount=$data->amount;
		$service->created_at=$now;

			$service->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(Service::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data->amount)){
		$errors["amount"]="Invalid amount";
	}

*/
		if(count($errors)==0){
			$service=new Service();
			$service->id=$data->id;
		$service->name=$data->name;
		$service->amount=$data->amount;
		$service->created_at=$now;

		$service->update();
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
		Service::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(Service::find($id));
	}
}
?>
