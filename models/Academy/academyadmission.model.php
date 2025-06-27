<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<?php
class AcademyAdmission extends Model implements JsonSerializable
{
	public $id;
	public $academy_student_id;
	public $academy_batch_id;
	public $academy_section_id;
	public $created_at;
	public $roll;
	public $academy_class_id;

	public function __construct() {}
	public function set($id, $academy_student_id, $academy_batch_id, $academy_section_id, $created_at, $roll, $academy_class_id)
	{
		$this->id = $id;
		$this->academy_student_id = $academy_student_id;
		$this->academy_batch_id = $academy_batch_id;
		$this->academy_section_id = $academy_section_id;
		$this->created_at = $created_at;
		$this->roll = $roll;
		$this->academy_class_id = $academy_class_id;
	}
	public function save()
	{
		global $db, $tx;
		$db->query("insert into {$tx}academy_admissions(academy_student_id,academy_batch_id,academy_section_id,created_at,roll,academy_class_id)values('$this->academy_student_id','$this->academy_batch_id','$this->academy_section_id','$this->created_at','$this->roll','$this->academy_class_id')");
		return $db->insert_id;
	}
	public function update()
	{
		global $db, $tx;
		$db->query("update {$tx}academy_admissions set academy_student_id='$this->academy_student_id',academy_batch_id='$this->academy_batch_id',academy_section_id='$this->academy_section_id',created_at='$this->created_at',roll='$this->roll',academy_class_id='$this->academy_class_id' where id='$this->id'");
	}
	public static function delete($id)
	{
		global $db, $tx;
		$db->query("delete from {$tx}academy_admissions where id={$id}");
	}
	public function jsonSerialize()
	{
		return get_object_vars($this);
	}
	public static function all()
	{
		global $db, $tx;
		$result = $db->query("select id,academy_student_id,academy_batch_id,academy_section_id,created_at,roll,academy_class_id from {$tx}academy_admissions");
		$data = [];
		while ($academyadmission = $result->fetch_object()) {
			$data[] = $academyadmission;
		}
		return $data;
	}
	public static function pagination($page = 1, $perpage = 10, $criteria = "")
	{
		global $db, $tx;
		$top = ($page - 1) * $perpage;
		$result = $db->query("select id,academy_student_id,academy_batch_id,academy_section_id,created_at,roll,academy_class_id from {$tx}academy_admissions $criteria limit $top,$perpage");
		$data = [];
		while ($academyadmission = $result->fetch_object()) {
			$data[] = $academyadmission;
		}
		return $data;
	}
	public static function count($criteria = "")
	{
		global $db, $tx;
		$result = $db->query("select count(*) from {$tx}academy_admissions $criteria");
		list($count) = $result->fetch_row();
		return $count;
	}
	public static function find($id)
	{
		global $db, $tx;
		$result = $db->query("select id,academy_student_id,academy_batch_id,academy_section_id,created_at,roll,academy_class_id from {$tx}academy_admissions where id='$id'");
		$academyadmission = $result->fetch_object();
		return $academyadmission;
	}
	public static function filter($name)
	{
		global $db, $tx;
		//Update field name after where keyword if don't have name field
		$result = $db->query("select id,academy_student_id,academy_batch_id,academy_section_id,created_at,roll,academy_class_id from {$tx}academy_admissions where name like '%$name%'");
		$data = [];
		while ($academyadmission = $result->fetch_object()) {
			$data[] = $academyadmission;
		}
		return $data;
	}
	static function get_last_id()
	{
		global $db, $tx;
		$result = $db->query("select max(id) last_id from {$tx}academy_admissions");
		$academyadmission = $result->fetch_object();
		return $academyadmission->last_id;
	}
	public function json()
	{
		return json_encode($this);
	}
	public function __toString()
	{
		return "		Id:$this->id<br> 
		Academy Student Id:$this->academy_student_id<br> 
		Academy Batch Id:$this->academy_batch_id<br> 
		Academy Section Id:$this->academy_section_id<br> 
		Created At:$this->created_at<br> 
		Roll:$this->roll<br> 
		Academy Class Id:$this->academy_class_id<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name = "cmbAcademyAdmission")
	{
		global $db, $tx;
		$html = "<select id='$name' name='$name'> ";
		$result = $db->query("select id,name from {$tx}academy_admissions");
		while ($academyadmission = $result->fetch_object()) {
			$html .= "<option value ='$academyadmission->id'>$academyadmission->name</option>";
		}
		$html .= "</select>";
		return $html;
	}
	static function html_table($page = 1, $perpage = 10, $criteria = "", $action = true)
	{
		global $db, $tx, $base_url;
		$count_result = $db->query("select count(*) total from {$tx}academy_admissions $criteria ");
		list($total_rows) = $count_result->fetch_row();
		$total_pages = ceil($total_rows / $perpage);
		$top = ($page - 1) * $perpage;
		$result = $db->query("select a.id,s.name student,b.name batch,c.name section,a.created_at,a.roll,ac.name class from {$tx}academy_admissions a,{$tx}academy_students s,{$tx}academy_batches b,{$tx}academy_sections c,{$tx}academy_classes ac where s.id=a.academy_student_id and b.id=a.academy_batch_id and c.id=a.academy_section_id and ac.id=a.academy_class_id $criteria limit $top,$perpage");
		$html = "<table class='table'>";
		if ($action) {
			$html .= "<tr><th>Id</th><th>Student</th><th>Batch</th><th>Section</th><th>Created At</th><th>Roll</th><th>Class</th><th>Action</th></tr>";
		} else {
			$html .= "<tr><th>Id</th><th>Student</th><th>Batch</th><th>Section</th><th>Created At</th><th>Roll</th><th>Class</th></tr>";
		}
		while ($academyadmission = $result->fetch_object()) {
			$action_buttons = "";
			if ($action) {

				$action_buttons = "<td><div class='btn-group' style='display:flex; gap:5px;'>";

				$action_buttons .= Event::button([
					"name"  => "show",
					"value" => "<i class='fas fa-eye'></i>", // eye icon for "Show"
					"class" => "btn btn-info",
					"route" => "academyadmission/show/$academyadmission->id"
				]);

				$action_buttons .= Event::button([
					"name"  => "edit",
					"value" => "<i class='fas fa-edit'></i>", // pencil icon for "Edit"
					"class" => "btn btn-primary",
					"route" => "academyadmission/edit/$academyadmission->id"
				]);

				$action_buttons .= Event::button([
					"name"  => "delete",
					"value" => "<i class='fas fa-trash'></i>", // trash icon for "Delete"
					"class" => "btn btn-danger",
					"route" => "academyadmission/confirm/$academyadmission->id"
				]);

				$action_buttons .= "</div></td>";
			}
			$html .= "<tr><td>$academyadmission->id</td><td>$academyadmission->student</td><td>$academyadmission->batch</td><td>$academyadmission->section</td><td>$academyadmission->created_at</td><td>$academyadmission->roll</td><td>$academyadmission->class</td> $action_buttons</tr>";
		}
		$html .= "</table>";
		$html .= pagination($page, $total_pages);
		return $html;
	}
	static function html_row_details($id)
	{
		global $db, $tx, $base_url;
		$id = intval($id);
		$result = $db->query("
			SELECT 
				a.id, 
				s.name AS student, 
				b.name AS batch, 
				c.name AS section, 
				a.created_at, 
				a.roll, 
				ac.name AS class 
			FROM {$tx}academy_admissions a
			JOIN {$tx}academy_students s ON s.id = a.academy_student_id
			JOIN {$tx}academy_batches b ON b.id = a.academy_batch_id
			JOIN {$tx}academy_sections c ON c.id = a.academy_section_id
			JOIN {$tx}academy_classes ac ON ac.id = a.academy_class_id
			WHERE a.id = $id
		");

		$academyadmission = $result->fetch_object();

		if (!$academyadmission) {
			return "<p class='alert alert-warning'>No record found.</p>";
		}

		$html = "<div class='card shadow-sm border-0 mb-4'>";
		$html .= "<div class='card-header bg-primary text-white'><h5 class='mb-0'>🎓 Academy Admission Details</h5></div>";
		$html .= "<div class='card-body p-0'>";
		$html .= "<table class='table table-striped table-bordered mb-0'>";
		$html .= "<tbody>";
		$html .= "<tr><th style='width: 30%;'>ID</th><td>" . htmlspecialchars($academyadmission->id) . "</td></tr>";
		$html .= "<tr><th>Student</th><td>" . htmlspecialchars($academyadmission->student) . "</td></tr>";
		$html .= "<tr><th>Batch</th><td>" . htmlspecialchars($academyadmission->batch) . "</td></tr>";
		$html .= "<tr><th>Section</th><td>" . htmlspecialchars($academyadmission->section) . "</td></tr>";
		$html .= "<tr><th>Created At</th><td>" . htmlspecialchars($academyadmission->created_at) . "</td></tr>";
		$html .= "<tr><th>Roll</th><td>" . htmlspecialchars($academyadmission->roll) . "</td></tr>";
		$html .= "<tr><th>Class</th><td>" . htmlspecialchars($academyadmission->class) . "</td></tr>";
		$html .= "</tbody>";
		$html .= "</table>";
		$html .= "</div></div>";

		return $html;
	}
}
?>