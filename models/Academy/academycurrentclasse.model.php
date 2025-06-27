<?php
class AcademyCurrentClasse extends Model implements JsonSerializable{
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
		$db->query("insert into {$tx}academy_current_classes(name)values('$this->name')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}academy_current_classes set name='$this->name' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}academy_current_classes where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,name from {$tx}academy_current_classes");
		$data=[];
		while($academycurrentclasse=$result->fetch_object()){
			$data[]=$academycurrentclasse;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,name from {$tx}academy_current_classes $criteria limit $top,$perpage");
		$data=[];
		while($academycurrentclasse=$result->fetch_object()){
			$data[]=$academycurrentclasse;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}academy_current_classes $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,name from {$tx}academy_current_classes where id='$id'");
		$academycurrentclasse=$result->fetch_object();
			return $academycurrentclasse;
	}
	public static function filter($name){
		global $db,$tx;
		//Update field name after where keyword if don't have name field
		$result=$db->query("select id,name from {$tx}academy_current_classes where name like '%$name%'");
		$data=[];
		while($academycurrentclasse=$result->fetch_object()){
			$data[]=$academycurrentclasse;
		}
			return $data;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}academy_current_classes");
		$academycurrentclasse =$result->fetch_object();
		return $academycurrentclasse->last_id;
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

	static function html_select($name="cmbAcademyCurrentClasse"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}academy_current_classes");
		while($academycurrentclasse=$result->fetch_object()){
			$html.="<option value ='$academycurrentclasse->id'>$academycurrentclasse->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}academy_current_classes $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,name from {$tx}academy_current_classes $criteria limit $top,$perpage");
		$html="<table class='table'>";
		if($action){
			$html.="<tr><th>Id</th><th>Name</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Name</th></tr>";
		}
		while($academycurrentclasse=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"academycurrentclasse/show/$academycurrentclasse->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"academycurrentclasse/edit/$academycurrentclasse->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"academycurrentclasse/confirm/$academycurrentclasse->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$academycurrentclasse->id</td><td>$academycurrentclasse->name</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,name from {$tx}academy_current_classes where id={$id}");
		$academycurrentclasse=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Current Class Show</th></tr>";
		$html.="<tr><th>Id</th><td>$academycurrentclasse->id</td></tr>";
		$html.="<tr><th>Name</th><td>$academycurrentclasse->name</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
