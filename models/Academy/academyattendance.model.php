<?php
class AcademyAttendance extends Model implements JsonSerializable{
	public $id;
	public $academy_student_id;
	public $date;
	public $present_id;
	public $status;

	public function __construct(){
	}
	public function set($id,$academy_student_id,$date,$present_id,$status){
		$this->id=$id;
		$this->academy_student_id=$academy_student_id;
		$this->date=$date;
		$this->present_id=$present_id;
		$this->status=$status;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}academy_attendances(academy_student_id,date,present_id,status)values('$this->academy_student_id','$this->date','$this->present_id','$this->status')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}academy_attendances set academy_student_id='$this->academy_student_id',date='$this->date',present_id='$this->present_id',status='$this->status' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}academy_attendances where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,academy_student_id,date,present_id,status from {$tx}academy_attendances");
		$data=[];
		while($academyattendance=$result->fetch_object()){
			$data[]=$academyattendance;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,academy_student_id,date,present_id,status from {$tx}academy_attendances $criteria limit $top,$perpage");
		$data=[];
		while($academyattendance=$result->fetch_object()){
			$data[]=$academyattendance;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}academy_attendances $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,academy_student_id,date,present_id,status from {$tx}academy_attendances where id='$id'");
		$academyattendance=$result->fetch_object();
			return $academyattendance;
	}
	public static function filter($attendance_id){
		global $db,$tx;
		//Update field name after where keyword if don't have name field
		$result=$db->query("select a.id,s.name student,a.date,p.name present,a.status from {$tx}academy_attendances a,{$tx}academy_students s,{$tx}academy_presents p where s.id=a.academy_student_id and p.id=a.present_id and a.id='$attendance_id'");
		$data=[];
		while($academyattendance=$result->fetch_object()){
			$data[]=$academyattendance;
		}
			return $data;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}academy_attendances");
		$academyattendance =$result->fetch_object();
		return $academyattendance->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Academy Student Id:$this->academy_student_id<br> 
		Date:$this->date<br> 
		Present Id:$this->present_id<br> 
		Status:$this->status<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbAcademyAttendance"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}academy_attendances");
		while($academyattendance=$result->fetch_object()){
			$html.="<option value ='$academyattendance->id'>$academyattendance->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}academy_attendances $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select a.id,s.name student,a.date,p.name present,a.status from {$tx}academy_attendances a,{$tx}academy_students s,{$tx}academy_presents p where s.id=a.academy_student_id and p.id=a.present_id $criteria limit $top,$perpage");
		$html="<table class='table'>";
		if($action){
			$html.="<tr><th>Id</th><th> Student </th><th>Date</th><th>Present </th><th>Status</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th> Student </th><th>Date</th><th>Present </th><th>Status</th></tr>";
		}
		while($academyattendance=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"academyattendance/show/$academyattendance->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"academyattendance/edit/$academyattendance->id"]);
				$action_buttons.= Event::button(["name"=>"record", "value"=>"Record", "class"=>"btn btn-success", "route"=>"academyattendance/attendance/$academyattendance->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$academyattendance->id</td><td>$academyattendance->student</td><td>$academyattendance->date</td><td>$academyattendance->present</td><td>$academyattendance->status</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
$result=$db->query("select a.id,s.name student,a.date,p.name present,a.status from {$tx}academy_attendances a,{$tx}academy_students s,{$tx}academy_presents p where s.id=a.academy_student_id and p.id=a.present_id  and a.id={$id}");
		$academyattendance=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Attendance Show</th></tr>";
		$html.="<tr><th>Id</th><td>$academyattendance->id</td></tr>";
		$html.="<tr><th>Academy Student Id</th><td>$academyattendance->student</td></tr>";
		$html.="<tr><th>Date</th><td>$academyattendance->date</td></tr>";
		$html.="<tr><th>Present Id</th><td>$academyattendance->present</td></tr>";
		$html.="<tr><th>Status</th><td>$academyattendance->status</td></tr>";

		$html.="</table>";
		return $html;
	}

		public static function attendance($id){
         
	    $results=AcademyAttendance::filter($id);

		$html="<table class='table'>";
		$html.="<tr><th>Student</th><th>Date<br></th><th>Present<br></h><th>Status<br></th></tr>";
	
		foreach($results as $result){
            $html.="<tr><td>$result->student</td><td>$result->date</td><td>$result->present</td><td>$result->status</td></tr>";
		   
			
		}
	
		$html.="</table>";		
        return $html;
	}
}
?>
