<?php
class MoneyReceiptController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data->customer_id)){
		$errors["customer_id"]="Invalid customer_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data->remark)){
		$errors["remark"]="Invalid remark";
	}
	if(!preg_match("/^[\s\S]+$/",$data->receipt_total)){
		$errors["receipt_total"]="Invalid receipt_total";
	}
	if(!preg_match("/^[\s\S]+$/",$data->discount)){
		$errors["discount"]="Invalid discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data->vat)){
		$errors["vat"]="Invalid vat";
	}

*/
		if(count($errors)==0){
			$moneyreceipt=new MoneyReceipt();
		$moneyreceipt->created_at=$now;
		$moneyreceipt->updated_at=$now;
		$moneyreceipt->academy_student_id=$data->academy_student_id;
		$moneyreceipt->remark=$data->remark;
		$moneyreceipt->receipt_total=$data->receipt_total;
		// $moneyreceipt->discount=$data->discount;
		// $moneyreceipt->vat=$data->vat;

			$moneyreceipt->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		$this->view(MoneyReceipt::find($id));
}
public function update($data,$file){
	global $now;
	if(isset($data->update)){
	$errors=[];
		if(count($errors)==0){
			$moneyreceipt=new MoneyReceipt();
			$moneyreceipt->id=$data->id;
		$moneyreceipt->created_at=$now;
		$moneyreceipt->updated_at=$now;
		$moneyreceipt->academy_student_id=$data->academy_student_id;
		$moneyreceipt->remark=$data->remark;
		$moneyreceipt->receipt_total=$data->receipt_total;
		// $moneyreceipt->discount=$data->discount;
		// $moneyreceipt->vat=$data->vat;

		$moneyreceipt->update();
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
		MoneyReceipt::delete($id);
		redirect();
	}
	public function show($id){
		$this->view(MoneyReceipt::find($id));
	}
}
?>
