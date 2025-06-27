<?php
class CustomerController extends Controller{
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
	if(!is_valid_mobile($data->mobile)){
		$errors["mobile"]="Invalid mobile";
	}
	if(!is_valid_email($data->email)){
		$errors["email"]="Invalid email";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtFathersName"])){
		$errors["fathers_name"]="Invalid fathers_name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtMothersName"])){
		$errors["mothers_name"]="Invalid mothers_name";
	}
	if(!preg_match("/^[\s\S]+$/",$data->address)){
		$errors["address"]="Invalid address";
	}
	if(!preg_match("/^[\s\S]+$/",$data->photo)){
		$errors["photo"]="Invalid photo";
	}

*/
		if(count($errors)==0){
			$customer=new Customer();
		$customer->name=$data->name;
		$customer->mobile=$data->mobile;
		$customer->email=$data->email;
		$customer->fathers_name=$data->fathers_name;
		$customer->mothers_name=$data->mothers_name;
		$customer->address=$data->address;
		$customer->photo=File::upload($file->photo, "img",$data->id);

			$customer->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(Customer::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!is_valid_mobile($data->mobile)){
		$errors["mobile"]="Invalid mobile";
	}
	if(!is_valid_email($data->email)){
		$errors["email"]="Invalid email";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtFathersName"])){
		$errors["fathers_name"]="Invalid fathers_name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtMothersName"])){
		$errors["mothers_name"]="Invalid mothers_name";
	}
	if(!preg_match("/^[\s\S]+$/",$data->address)){
		$errors["address"]="Invalid address";
	}
	if(!preg_match("/^[\s\S]+$/",$data->photo)){
		$errors["photo"]="Invalid photo";
	}

*/
		if(count($errors)==0){
			$customer=new Customer();
			$customer->id=$data->id;
		$customer->name=$data->name;
		$customer->mobile=$data->mobile;
		$customer->email=$data->email;
		$customer->fathers_name=$data->fathers_name;
		$customer->mothers_name=$data->mothers_name;
		$customer->address=$data->address;
		if($file->photo->name!=""){
			$customer->photo=File::upload($file->photo, "img",$data->id);
		}else{
			$customer->photo=Customer::find($data->id)->photo;
		}

		$customer->update();
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
		Customer::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(Customer::find($id));
	}
}
?>
