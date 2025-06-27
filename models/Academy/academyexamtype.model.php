<?php
class AcademyExamType extends Model implements JsonSerializable{
	public $id;
	public $name;

	public function __construct(){
	}
	public function set($id,$name){
		$this->id=$id;
		$this->name=$name;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}academy_exam_types(name)values('$this->name')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}academy_exam_types set name='$this->name' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}academy_exam_types where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,name from {$tx}academy_exam_types");
		$data=[];
		while($academyexamtype=$result->fetch_object()){
			$data[]=$academyexamtype;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,name from {$tx}academy_exam_types $criteria limit $top,$perpage");
		$data=[];
		while($academyexamtype=$result->fetch_object()){
			$data[]=$academyexamtype;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}academy_exam_types $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,name from {$tx}academy_exam_types where id='$id'");
		$academyexamtype=$result->fetch_object();
			return $academyexamtype;
	}
	public static function filter($name){
		global $db,$tx;
		//Update field name after where keyword if don't have name field
		$result=$db->query("select id,name from {$tx}academy_exam_types where name like '%$name%'");
		$data=[];
		while($academyexamtype=$result->fetch_object()){
			$data[]=$academyexamtype;
		}
			return $data;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}academy_exam_types");
		$academyexamtype =$result->fetch_object();
		return $academyexamtype->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbAcademyExamType"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}academy_exam_types");
		while($academyexamtype=$result->fetch_object()){
			$html.="<option value ='$academyexamtype->id'>$academyexamtype->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}academy_exam_types $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,name from {$tx}academy_exam_types $criteria limit $top,$perpage");
		$html="<table class='table'>";
		if($action){
			$html.="<tr><th>Id</th><th>Name</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Name</th></tr>";
		}
		while($academyexamtype=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"academyexamtype/show/$academyexamtype->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"academyexamtype/edit/$academyexamtype->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"academyexamtype/confirm/$academyexamtype->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$academyexamtype->id</td><td>$academyexamtype->name</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,name from {$tx}academy_exam_types where id={$id}");
		$academyexamtype=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">AcademyExamType Show</th></tr>";
		$html.="<tr><th>Id</th><td>$academyexamtype->id</td></tr>";
		$html.="<tr><th>Name</th><td>$academyexamtype->name</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
