<?php
class InvoiceDetail extends Model implements JsonSerializable{
	public $id;
	public $invoice_id;
	public $service_id;
	public $price;
	public $created_at;

	public function __construct(){
	}
	public function set($id,$invoice_id,$service_id,$price,$created_at){
		$this->id=$id;
		$this->invoice_id=$invoice_id;
		$this->service_id=$service_id;
		$this->price=$price;
		$this->created_at=$created_at;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}invoice_details(invoice_id,service_id,price)values('$this->invoice_id','$this->service_id','$this->price')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}invoice_details set invoice_id='$this->invoice_id',service_id='$this->service_id',price='$this->price',created_at='$this->created_at' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}invoice_details where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,invoice_id,service_id,price,created_at from {$tx}invoice_details");
		$data=[];
		while($invoicedetail=$result->fetch_object()){
			$data[]=$invoicedetail;
		}
			return $data;
	}

	public static function all_by_invoice_id($invoice_id){
		global $db,$tx;
		$result=$db->query("select i.service_id,s.name,i.price from {$tx}invoice_details i,{$tx}services s where s.id=i.service_id and invoice_id={$invoice_id}");
		$data=[];
		while($invoicedetail=$result->fetch_object()){
			$data[]=$invoicedetail;
		}
			return $data;
	}

	// public static function pagination($page=1,$perpage=10,$criteria=""){
	// 	global $db,$tx;
	// 	$top=($page-1)*$perpage;
	// 	$result=$db->query("select id,invoice_id,service_id,price,created_at from {$tx}invoice_details $criteria limit $top,$perpage");
	// 	$data=[];
	// 	while($invoicedetail=$result->fetch_object()){
	// 		$data[]=$invoicedetail;
	// 	}
	// 		return $data;
	// }


	// public static function count($criteria=""){
	// 	global $db,$tx;
	// 	$result =$db->query("select count(*) from {$tx}invoice_details $criteria");
	// 	list($count)=$result->fetch_row();
	// 		return $count;
	// }


	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,invoice_id,service_id,price,created_at from {$tx}invoice_details where id='$id'");
		$invoicedetail=$result->fetch_object();
			return $invoicedetail;
	}
	// public static function filter($name){
	// 	global $db,$tx;
	// 	//Update field name after where keyword if don't have name field
	// 	$result=$db->query("select id,invoice_id,service_id,price,created_at from {$tx}invoice_details where name like '%$name%'");
	// 	$data=[];
	// 	while($invoicedetail=$result->fetch_object()){
	// 		$data[]=$invoicedetail;
	// 	}
	// 		return $data;
	// }
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}invoice_details");
		$invoicedetail =$result->fetch_object();
		return $invoicedetail->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Invoice Id:$this->invoice_id<br> 
		Service Id:$this->service_id<br> 
		Price:$this->price<br> 
		Created At:$this->created_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbInvoiceDetail"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}invoice_details");
		while($invoicedetail=$result->fetch_object()){
			$html.="<option value ='$invoicedetail->id'>$invoicedetail->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}invoice_details $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select d.id,a.name student,s.name service,d.price,d.created_at from {$tx}invoice_details d,{$tx}academy_students a,{$tx}services s where a.id=d.invoice_id and s.id=d.service_id $criteria limit $top,$perpage");
		$html="<table class='table'>";
		if($action){
			$html.="<tr><th>Id</th><th>Student</th><th>Service</th><th>Price</th><th>Created At</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Student</th><th>Service</th><th>Price</th><th>Created At</th></tr>";
		}
		while($invoicedetail=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"invoicedetail/show/$invoicedetail->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"invoicedetail/edit/$invoicedetail->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"invoicedetail/confirm/$invoicedetail->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$invoicedetail->id</td><td>$invoicedetail->student</td><td>$invoicedetail->service</td><td>$invoicedetail->price</td><td>$invoicedetail->created_at</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result=$db->query("select d.id,a.name student,s.name service,d.price,d.created_at from {$tx}invoice_details d,{$tx}academy_students a,{$tx}services s where a.id=d.invoice_id and s.id=d.service_id");
		$invoicedetail=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">InvoiceDetail Show</th></tr>";
		$html.="<tr><th>Id</th><td>$invoicedetail->id</td></tr>";
		$html.="<tr><th>Invoice Id</th><td>$invoicedetail->student</td></tr>";
		$html.="<tr><th>Service Id</th><td>$invoicedetail->service</td></tr>";
		$html.="<tr><th>Price</th><td>$invoicedetail->price</td></tr>";
		$html.="<tr><th>Created At</th><td>$invoicedetail->created_at</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
