<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">



<?php
class AcademyStudent extends Model implements JsonSerializable
{
	public $id;
	public $name;
	public $fathers_name;
	public $mothers_name;
	public $academy_batch_id;
	public $created_at;
	public $dob;
	public $photo;
	public $contact_no;
	public $address;

	public function __construct() {}
	public function set($id, $name, $fathers_name, $mothers_name, $academy_batch_id, $created_at, $dob, $photo, $contact_no, $address)
	{
		$this->id = $id;
		$this->name = $name;
		$this->fathers_name = $fathers_name;
		$this->mothers_name = $mothers_name;
		$this->academy_batch_id = $academy_batch_id;
		$this->created_at = $created_at;
		$this->dob = $dob;
		$this->photo = $photo;
		$this->contact_no = $contact_no;
		$this->address = $address;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}academy_students(name,fathers_name,mothers_name,academy_batch_id,created_at,dob,photo,contact_no,address)values('$this->name','$this->fathers_name','$this->mothers_name','$this->academy_batch_id','$this->created_at','$this->dob','$this->photo','$this->contact_no','$this->address')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}academy_students set name='$this->name',fathers_name='$this->fathers_name',mothers_name='$this->mothers_name',academy_batch_id='$this->academy_batch_id',created_at='$this->created_at',dob='$this->dob',photo='$this->photo',contact_no='$this->contact_no',address='$this->address' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}academy_students where id={$id}");
	}
	public function jsonSerialize()
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,name,fathers_name,mothers_name,academy_batch_id,created_at,dob,photo,contact_no,address from {$tx}academy_students");
		$data = [];
		while ($academystudent = $result->fetch_object()) {
			$data[] = $academystudent;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,name,fathers_name,mothers_name,academy_batch_id,created_at,dob,photo,contact_no,address from {$tx}academy_students $criteria limit $top,$perpage");
		$data = [];
		while ($academystudent = $result->fetch_object()) {
			$data[] = $academystudent;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}academy_students $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,name,fathers_name,mothers_name,academy_batch_id,created_at,dob,photo,contact_no,address from {$tx}academy_students where id='$id'");
		$academystudent = $result->fetch_object();
		return $academystudent;
	}
	public static function filter($name)
	{
		global $db, $tx;
		//Update field name after where keyword if don't have name field
		$result = $db->query("select id,name,fathers_name,mothers_name,academy_batch_id,created_at,dob,photo,contact_no,address from {$tx}academy_students where name like '%$name%'");
		$data = [];
		while ($academystudent = $result->fetch_object()) {
			$data[] = $academystudent;
		}
		return $data;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}academy_students");
		$academystudent = $result->fetch_object();
		return $academystudent->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Fathers Name:$this->fathers_name<br> 
		Mothers Name:$this->mothers_name<br> 
		Academy Batch Id:$this->academy_batch_id<br> 
		Created At:$this->created_at<br> 
		Dob:$this->dob<br> 
		Photo:$this->photo<br> 
		Contact No:$this->contact_no<br> 
		Address:$this->address<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbAcademyStudent")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}academy_students");
		while ($academystudent = $result->fetch_object()) {
			$html .= "<option value ='$academystudent->id'>$academystudent->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}academy_students $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select s.id,s.name,s.fathers_name,s.mothers_name,b.name batch,s.created_at,s.dob,s.photo,s.contact_no,s.address from {$tx}academy_students s,{$tx}academy_batches b where b.id=s.academy_batch_id $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Name</th><th>Father Name</th><th>Mother Name</th><th>Batch</th><th>Created At</th><th>Dob</th><th>Photo</th><th>Address</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Name</th><th>Father Name</th><th>Mother Name</th><th>Batch</th><th>Created At</th><th>Dob</th><th>Photo</th><th>Address</th></tr>";
		}
		while ($academystudent = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {



				$action_buttons = "<td><div class='btn-group' style='display:flex; gap:5px;'>";

				$action_buttons .= Event::button([
					"name"  => "show",
					"value" => "<i class='fas fa-eye'></i>", // eye icon for "Show"
					"class" => "btn btn-info",
					"route" => "academystudent/show/$academystudent->id"
				]);

				$action_buttons .= Event::button([
					"name"  => "edit",
					"value" => "<i class='fas fa-edit'></i>", // pencil icon for "Edit"
					"class" => "btn btn-primary",
					"route" => "academystudent/edit/$academystudent->id"
				]);

				$action_buttons .= Event::button([
					"name"  => "delete",
					"value" => "<i class='fas fa-trash'></i>", // trash icon for "Delete"
					"class" => "btn btn-danger",
					"route" => "academystudent/confirm/$academystudent->id"
				]);

				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$academystudent->id</td><td>$academystudent->name</td><td>$academystudent->fathers_name</td><td>$academystudent->mothers_name</td><td>$academystudent->batch</td><td>$academystudent->created_at</td><td>$academystudent->dob</td><td><img src='$base_url/img/$academystudent->photo' width='100' /></td><td>$academystudent->address</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}


	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$result = $db->query("SELECT s.id, s.name, s.fathers_name, s.mothers_name, b.name batch, s.created_at, s.dob, s.photo, s.contact_no, s.address 
	                      FROM {$tx}academy_students s, {$tx}academy_batches b 
	                      WHERE b.id = s.academy_batch_id AND s.id = {$id}");
		$student = $result->fetch_object();

		$photo = $student->photo ? "$base_url/img/$student->photo" : "https://via.placeholder.com/100";

		$html = "
	<div class='container my-4'>
	  <div class='card shadow-lg'>
	    <div class='card-header bg-primary text-white'>
	      <h4 class='mb-0'><i class='fas fa-user-graduate'></i> Student Details</h4>
	    </div>
	    <div class='card-body'>
	      <div class='row'>
	        <div class='col-md-8'>
	          <table class='table table-bordered'>
	            <tr><th>ID</th><td>{$student->id}</td></tr>
	            <tr><th>Name</th><td>{$student->name}</td></tr>
	            <tr><th>Father's Name</th><td>{$student->fathers_name}</td></tr>
	            <tr><th>Mother's Name</th><td>{$student->mothers_name}</td></tr>
	            <tr><th>Batch</th><td>{$student->batch}</td></tr>
	            <tr><th>Date of Birth</th><td>{$student->dob}</td></tr>
	            <tr><th>Contact No</th><td><i class='fas fa-phone'></i> {$student->contact_no}</td></tr>
	            <tr><th>Address</th><td><i class='fas fa-map-marker-alt'></i> {$student->address}</td></tr>
	            <tr><th>Created At</th><td><i class='fas fa-calendar'></i> {$student->created_at}</td></tr>
	          </table>
	        </div>
	        <div class='col-md-4 text-center'>
	          <img src='{$photo}' class='img-thumbnail rounded shadow' style='max-width: 150px;' alt='Student Photo'>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	";

		return $html;
	}
}
?>