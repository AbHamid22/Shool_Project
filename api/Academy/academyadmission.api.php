<?php
class AcademyAdmissionApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["academy_admissions"=>AcademyAdmission::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["academy_admissions"=>AcademyAdmission::pagination($page,$perpage),"total_records"=>AcademyAdmission::count()]);
	}
	function search($data){
		echo json_encode(["academy_admissions"=>AcademyAdmission::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["academyadmission"=>AcademyAdmission::find($data->id)]);
	}
	function delete($data){
		AcademyAdmission::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$academyadmission=new AcademyAdmission();
		$academyadmission->academy_student_id=$data->academy_student_id;
		$academyadmission->academy_batch_id=$data->academy_batch_id;
		$academyadmission->academy_section_id=$data->academy_section_id;
		$academyadmission->created_at=$data->created_at;
		$academyadmission->roll=$data->roll;
		$academyadmission->academy_class_id=$data->academy_class_id;

		$academyadmission->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$academyadmission=new AcademyAdmission();
		$academyadmission->id=$data->id;
		$academyadmission->academy_student_id=$data->academy_student_id;
		$academyadmission->academy_batch_id=$data->academy_batch_id;
		$academyadmission->academy_section_id=$data->academy_section_id;
		$academyadmission->created_at=$data->created_at;
		$academyadmission->roll=$data->roll;
		$academyadmission->academy_class_id=$data->academy_class_id;

		$academyadmission->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
