<?php
class AcademyStudentApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["academy_students"=>AcademyStudent::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["academy_students"=>AcademyStudent::pagination($page,$perpage),"total_records"=>AcademyStudent::count()]);
	}
	function search($data){
		echo json_encode(["academy_students"=>AcademyStudent::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["academystudent"=>AcademyStudent::find($data->id)]);
	}
	function delete($data){
		AcademyStudent::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$academystudent=new AcademyStudent();
		$academystudent->name=$data->name;
		$academystudent->fathers_name=$data->fathers_name;
		$academystudent->mothers_name=$data->mothers_name;
		$academystudent->academy_batch_id=$data->academy_batch_id;
		$academystudent->dob=$data->dob;
		$academystudent->photo=upload($file->photo, "../img",$data->name);
		$academystudent->contact_no=$data->contact_no;
		$academystudent->address=$data->address;

		$academystudent->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$academystudent=new AcademyStudent();
		$academystudent->id=$data->id;
		$academystudent->name=$data->name;
		$academystudent->fathers_name=$data->fathers_name;
		$academystudent->mothers_name=$data->mothers_name;
		$academystudent->academy_batch_id=$data->academy_batch_id;
		$academystudent->dob=$data->dob;
		if(isset($file->photo->name)){
			$academystudent->photo=upload($file->photo, "../img",$data->name);
		}else{
			$academystudent->photo=AcademyStudent::find($data->id)->photo;
		}
		$academystudent->contact_no=$data->contact_no;
		$academystudent->address=$data->address;

		$academystudent->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
