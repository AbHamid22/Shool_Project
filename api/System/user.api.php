<?php
class UserApi{
	public function __construct(){
		if(!$this->authorized()){          
			http_response_code(401);//Unauthorized
			 die("401 Unauthorized");
		}
	}
	function index(){
		echo json_encode(["users"=>User::all()]);
	}
	function pagination($data){
		$page=$data->page;
		$perpage=$data->perpage;
		echo json_encode(["users"=>User::pagination($page,$perpage),"total_records"=>User::count()]);
	}
	function search($data){
		echo json_encode(["users"=>User::filter($data->name)]);
	}
	function find($data){
		echo json_encode(["user"=>User::find($data->id)]);
	}
	function delete($data){
		User::delete($data->id);
		echo json_encode(["success" => "yes"]);
	}
	function save($data,$file=[]){
		$user=new User();
		$user->name=$data->name;
		$user->role_id=$data->role_id;
		$user->password=$data->password;
		$user->email=$data->email;
		$user->full_name=$data->full_name;
		$user->photo=upload($file["photo"], "../img",$data->name);
		$user->verify_code=$data->verify_code;
		$user->inactive=$data->inactive;
		$user->mobile=$data->mobile;
		$user->updated_at=$data->updated_at;
		$user->ip=$data->ip;
		$user->email_verified_at=$data->email_verified_at;
		$user->remember_token=$data->remember_token;

		$user->save();
		echo json_encode(["success" => "yes"]);
	}
	function update($data,$file=[]){
		$user=new User();
		$user->id=$data->id;
		$user->name=$data->name;
		$user->role_id=$data->role_id;
		$user->password=$data->password;
		$user->email=$data->email;
		$user->full_name=$data->full_name;
		if(isset($file["photo"]["name"])){
			$user->photo=upload($file->photo, "../img",$data->name);
		}else{
			$user->photo=User::find($data->id)->photo;
		}
		$user->verify_code=$data->verify_code;
		$user->inactive=$data->inactive;
		$user->mobile=$data->mobile;
		$user->updated_at=$data->updated_at;
		$user->ip=$data->ip;
		$user->email_verified_at=$data->email_verified_at;
		$user->remember_token=$data->remember_token;

		$user->update();
		echo json_encode(["success" => "yes"]);
	}
}
?>
