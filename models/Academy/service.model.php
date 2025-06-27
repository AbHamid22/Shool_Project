<?php
class Service extends Model implements JsonSerializable{
	public $id;
	public $name;
	public $amount;
	public $created_at;

	public function __construct(){
	}
	public function set($id,$name,$amount,$created_at){
		$this->id=$id;
		$this->name=$name;
		$this->amount=$amount;
		$this->created_at=$created_at;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}services(name,amount,created_at)values('$this->name','$this->amount','$this->created_at')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}services set name='$this->name',amount='$this->amount',created_at='$this->created_at' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}services where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,name,amount,created_at from {$tx}services");
		$data=[];
		while($service=$result->fetch_object()){
			$data[]=$service;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,name,amount,created_at from {$tx}services $criteria limit $top,$perpage");
		$data=[];
		while($service=$result->fetch_object()){
			$data[]=$service;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}services $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,name,amount,created_at from {$tx}services where id='$id'");
		$service=$result->fetch_object();
			return $service;
	}
	public static function filter($name){
		global $db,$tx;
		//Update field name after where keyword if don't have name field
		$result=$db->query("select id,name,amount,created_at from {$tx}services where name like '%$name%'");
		$data=[];
		while($service=$result->fetch_object()){
			$data[]=$service;
		}
			return $data;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}services");
		$service =$result->fetch_object();
		return $service->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Amount:$this->amount<br> 
		Created At:$this->created_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbService"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}services");
		while($service=$result->fetch_object()){
			$html.="<option value ='$service->id'>$service->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}services $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,name,amount,created_at from {$tx}services $criteria limit $top,$perpage");
		$html="<table class='table'>";
		if($action){
			$html.="<tr><th>Id</th><th>Name</th><th>Amount</th><th>Created At</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Name</th><th>Amount</th><th>Created At</th></tr>";
		}
		while($service=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"service/show/$service->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"service/edit/$service->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"service/confirm/$service->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$service->id</td><td>$service->name</td><td>$service->amount</td><td>$service->created_at</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,name,amount,created_at from {$tx}services where id={$id}");
		$service=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Service Show</th></tr>";
		$html.="<tr><th>Id</th><td>$service->id</td></tr>";
		$html.="<tr><th>Name</th><td>$service->name</td></tr>";
		$html.="<tr><th>Amount</th><td>$service->amount</td></tr>";
		$html.="<tr><th>Created At</th><td>$service->created_at</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
