<?php
class MoneyReceiptApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["money_receipts"=>MoneyReceipt::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["money_receipts"=>MoneyReceipt::pagination($page,$perpage),"total_records"=>MoneyReceipt::count()]);
	}
	function search($data){
		// echo json_encode(["money_receipts"=>MoneyReceipt::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["moneyreceipt"=>MoneyReceipt::find($data->id)]);
	}
	function delete($data){
		MoneyReceipt::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data){
		$now=date("Y-m-d H:i:s");
		$moneyreceipt=new MoneyReceipt();

		$moneyreceipt->created_at=$now;
		$moneyreceipt->updated_at=$now;
		$moneyreceipt->academy_student_id=$data->academy_student_id;
		$moneyreceipt->remark=$data->remark;
		$moneyreceipt->receipt_total=$data->receipt_total;

		$mr_id=$moneyreceipt->save();
		
		$items=$data->items;

		foreach($items as $item){

			$moneyreceiptdetail=new MoneyReceiptDetail();
			$moneyreceiptdetail->money_receipt_id=$mr_id;
			$moneyreceiptdetail->product_id=$item->product_id;
			$moneyreceiptdetail->price=$item->price;
			$moneyreceiptdetail->qty=$item->qty;
			$moneyreceiptdetail->save();

		}

		echo json_encode(["success" => "yes"]);

	}
	function update($data){
		$moneyreceipt=new MoneyReceipt();
		$moneyreceipt->id=$data->id;
		$moneyreceipt->created_at=$data->created_at;
		$moneyreceipt->updated_at=$data->updated_at;
		$moneyreceipt->academy_student_id=$data->academy_student_id;
		$moneyreceipt->remark=$data->remark;
		$moneyreceipt->receipt_total=$data->receipt_total;

		$moneyreceipt->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
