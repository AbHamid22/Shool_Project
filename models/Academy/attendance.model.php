<?php
class Attendance extends Model implements JsonSerializable{
	public $id;
	public $roll_no;
	public $student_id;
	public $date;
	public $status;

	public function __construct(){
	}
	public function set($id,$roll_no,$student_id,$date,$status){
		$this->id=$id;
		$this->roll_no=$roll_no;
		$this->student_id=$student_id;
		$this->date=$date;
		$this->status=$status;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}attendances(roll_no,student_id,date,status)values('$this->roll_no','$this->student_id','$this->date','$this->status')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}attendances set roll_no='$this->roll_no',student_id='$this->student_id',date='$this->date',status='$this->status' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}attendances where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,roll_no,student_id,date,status from {$tx}attendances");
		$data=[];
		while($attendance=$result->fetch_object()){
			$data[]=$attendance;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,roll_no,student_id,date,status from {$tx}attendances $criteria limit $top,$perpage");
		$data=[];
		while($attendance=$result->fetch_object()){
			$data[]=$attendance;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}attendances $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,roll_no,student_id,date,status from {$tx}attendances where id='$id'");
		$attendance=$result->fetch_object();
			return $attendance;
	}
	public static function filter($name){
		global $db,$tx;
		//Update field name after where keyword if don't have name field
		$result=$db->query("select id,roll_no,student_id,date,status from {$tx}attendances where name like '%$name%'");
		$data=[];
		while($attendance=$result->fetch_object()){
			$data[]=$attendance;
		}
			return $data;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}attendances");
		$attendance =$result->fetch_object();
		return $attendance->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Roll No:$this->roll_no<br> 
		Student Id:$this->student_id<br> 
		Date:$this->date<br> 
		Status:$this->status<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbAttendance"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}attendances");
		while($attendance=$result->fetch_object()){
			$html.="<option value ='$attendance->id'>$attendance->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}attendances $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,roll_no,student_id,date,status from {$tx}attendances $criteria limit $top,$perpage");
		$html="<table class='table'>";
		if($action){
			$html.="<tr><th>Id</th><th>Roll No</th><th>Student Id</th><th>Date</th><th>Status</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Roll No</th><th>Student Id</th><th>Date</th><th>Status</th></tr>";
		}
		while($attendance=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"attendance/show/$attendance->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"attendance/edit/$attendance->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"attendance/confirm/$attendance->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$attendance->id</td><td>$attendance->roll_no</td><td>$attendance->student_id</td><td>$attendance->date</td><td>$attendance->status</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,roll_no,student_id,date,status from {$tx}attendances where id={$id}");
		$attendance=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Attendance Show</th></tr>";
		$html.="<tr><th>Id</th><td>$attendance->id</td></tr>";
		$html.="<tr><th>Roll No</th><td>$attendance->roll_no</td></tr>";
		$html.="<tr><th>Student Id</th><td>$attendance->student_id</td></tr>";
		$html.="<tr><th>Date</th><td>$attendance->date</td></tr>";
		$html.="<tr><th>Status</th><td>$attendance->status</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
