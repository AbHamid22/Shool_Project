<?php
class AcademyTeacherApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["academy_teachers"=>AcademyTeacher::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["academy_teachers"=>AcademyTeacher::pagination($page,$perpage),"total_records"=>AcademyTeacher::count()]);
	}
	function search($data){
		echo json_encode(["academy_teachers"=>AcademyTeacher::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["academyteacher"=>AcademyTeacher::find($data->id)]);
	}
	function delete($data){
		AcademyTeacher::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$academyteacher=new AcademyTeacher();
		$academyteacher->name=$data->name;
		$academyteacher->contact_no=$data->contact_no;
		$academyteacher->position=$data->position;

		$academyteacher->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$academyteacher=new AcademyTeacher();
		$academyteacher->id=$data->id;
		$academyteacher->name=$data->name;
		$academyteacher->contact_no=$data->contact_no;
		$academyteacher->position=$data->position;

		$academyteacher->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
