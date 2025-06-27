<?php
class Invoice extends Model implements JsonSerializable{
	public $id;
	public $academy_student_id;
	public $issue_date;
	public $due_date;
	public $total;
	public $created_at;

	public function __construct(){
	}
	public function set($id,$academy_student_id,$issue_date,$due_date,$total,$created_at){
		$this->id=$id;
		$this->academy_student_id=$academy_student_id;
		$this->issue_date=$issue_date;
		$this->due_date=$due_date;
		$this->total=$total;
		$this->created_at=$created_at;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}invoices(academy_student_id,issue_date,due_date,total)values('$this->academy_student_id','$this->issue_date','$this->due_date','$this->total')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}invoices set academy_student_id='$this->academy_student_id',issue_date='$this->issue_date',due_date='$this->due_date',total='$this->total',created_at='$this->created_at' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}invoices where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,academy_student_id,issue_date,due_date,total,created_at from {$tx}invoices");
		$data=[];
		while($invoice=$result->fetch_object()){
			$data[]=$invoice;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,academy_student_id,issue_date,due_date,total,created_at from {$tx}invoices $criteria limit $top,$perpage");
		$data=[];
		while($invoice=$result->fetch_object()){
			$data[]=$invoice;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}invoices $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,academy_student_id,issue_date,due_date,total,created_at from {$tx}invoices where id='$id'");
		$invoice=$result->fetch_object();
			return $invoice;
	}
	public static function filter($name){
		global $db,$tx;
		//Update field name after where keyword if don't have name field
		$result=$db->query("select id,academy_student_id,issue_date,due_date,total,created_at from {$tx}invoices where name like '%$name%'");
		$data=[];
		while($invoice=$result->fetch_object()){
			$data[]=$invoice;
		}
			return $data;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}invoices");
		$invoice =$result->fetch_object();
		return $invoice->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Academy Student Id:$this->academy_student_id<br> 
		Issue Date:$this->issue_date<br> 
		Due Date:$this->due_date<br> 
		Total:$this->total<br> 
		Created At:$this->created_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbInvoice"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}invoices");
		while($invoice=$result->fetch_object()){
			$html.="<option value ='$invoice->id'>$invoice->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}invoices $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select i.id,s.name as student,i.issue_date,i.due_date,i.total,i.created_at from {$tx}invoices i, {$tx}academy_students s where s.id=i.academy_student_id order by i.id desc limit  $top,$perpage");
		$html="<table class='table'>";
		if($action){
			$html.="<tr><th>Id</th><th> Student </th><th>Issue Date</th><th>Due Date</th><th>Total</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Student</th><th>Issue Date</th><th>Due Date</th><th>Total</th></tr>";
		}
		while($invoice=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Details", "class"=>"btn btn-info", "route"=>"invoice/show/$invoice->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"invoice/edit/$invoice->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"invoice/confirm/$invoice->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$invoice->id</td><td>$invoice->student</td><td>$invoice->issue_date</td><td>$invoice->due_date</td><td>$invoice->total</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,academy_student_id,issue_date,due_date,total,created_at from {$tx}invoices where id={$id}");
		$invoice=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Invoice Show</th></tr>";
		$html.="<tr><th>Id</th><td>$invoice->id</td></tr>";
		$html.="<tr><th>Academy Student Id</th><td>$invoice->academy_student_id</td></tr>";
		$html.="<tr><th>Issue Date</th><td>$invoice->issue_date</td></tr>";
		$html.="<tr><th>Due Date</th><td>$invoice->due_date</td></tr>";
		$html.="<tr><th>Total</th><td>$invoice->total</td></tr>";
		

		$html.="</table>";
		return $html;
	}
}
?>
