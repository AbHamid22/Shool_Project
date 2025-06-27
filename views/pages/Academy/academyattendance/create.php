<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create Attendance"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyattendance", "text"=>"Manage Attendance"]);
echo Form::open(["route"=>"academyattendance/save"]);
	echo Form::input(["label"=>"Academy Student","name"=>"academy_student_id","table"=>"academy_students"]);
	echo Form::input(["label"=>"Date","type"=>"date","name"=>"date"]);
	echo Form::input(["label"=>"Present","name"=>"present_id","table"=>"academy_presents"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();








// Page::open();
// Row::open();
// Col::open();
// Card::open(["title" => "Create Academy Attendance"]);

// Html::link(["class" => "btn btn-success", "route" => "academyattendance", "text" => "Manage Academy Attendance"]);

// echo Form::open(["route" => "academyattendance/save"]);

//     echo Form::input(["label" => "Academy Student", "name" => "academy_student_id", "table" => "academy_students"]);

//     echo Form::input([
//         "label" => "Date & Time",
//         "type" => "datetime-local",
//         "name" => "date",
//         "value" => date('Y-m-d\TH:i')  // Default to current date and time
//     ]);

//     echo Form::input(["label" => "Present", "name" => "present_id", "table" => "academy_presents"]);

//     echo Form::input(["label" => "Status", "type" => "text", "name" => "status"]);

//     echo Form::input([
//         "name" => "create",
//         "class" => "btn btn-primary offset-2",
//         "value" => "Save",
//         "type" => "submit"
//     ]);

// echo Form::close();
// Card::close();
// Col::close();
// Row::close();
// Page::close();
