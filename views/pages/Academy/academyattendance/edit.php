<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Attendance"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyattendance", "text"=>"Manage Attendance"]);
echo Form::open(["route"=>"academyattendance/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$academyattendance->id"]);
	echo Form::input(["label"=>"Academy Student","name"=>"academy_student_id","table"=>"academy_students","value"=>"$academyattendance->academy_student_id"]);
	echo Form::input(["label"=>"Date","type"=>"date","name"=>"date","value"=>"$academyattendance->date"]);
	echo Form::input(["label"=>"Present","name"=>"present_id","table"=>"academy_presents","value"=>"$academyattendance->present_id"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status","value"=>"$academyattendance->status"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
