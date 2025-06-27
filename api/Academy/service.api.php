<?php
class ServiceApi{
	public function __construct(){
	}
	function index(){
		echo json_encode(["services"=>Service::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["services"=>Service::pagination($page,$perpage),"total_records"=>Service::count()]);
	}
	function search($data){
		echo json_encode(["services"=>Service::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["service"=>Service::find($data->id)]);
	}
	function delete($data){
		Service::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$service=new Service();
		$service->name=$data->name;
		$service->amount=$data->amount;

		$service->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$service=new Service();
		$service->id=$data->id;
		$service->name=$data->name;
		$service->amount=$data->amount;

		$service->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
