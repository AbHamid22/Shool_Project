<?php
class InvoiceDetailController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->invoice_id)){
		$errors["invoice_id"]="Invalid invoice_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->service_id)){
		$errors["service_id"]="Invalid service_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->price)){
		$errors["price"]="Invalid price";
	}

*/
		if(count($errors)==0){
			$invoicedetail=new InvoiceDetail();
		$invoicedetail->invoice_id=$data->invoice_id;
		$invoicedetail->service_id=$data->service_id;
		$invoicedetail->price=$data->price;
		$invoicedetail->created_at=$now;

			$invoicedetail->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(InvoiceDetail::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data->invoice_id)){
		$errors["invoice_id"]="Invalid invoice_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->service_id)){
		$errors["service_id"]="Invalid service_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->price)){
		$errors["price"]="Invalid price";
	}

*/
		if(count($errors)==0){
			$invoicedetail=new InvoiceDetail();
			$invoicedetail->id=$data->id;
		$invoicedetail->invoice_id=$data->invoice_id;
		$invoicedetail->service_id=$data->service_id;
		$invoicedetail->price=$data->price;
		$invoicedetail->created_at=$now;

		$invoicedetail->update();
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
		InvoiceDetail::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(InvoiceDetail::find($id));
	}
}
?>
