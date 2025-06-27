<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Invoice"]);
Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
echo Form::open(["route"=>"invoice/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$invoice->id"]);
	echo Form::input(["label"=>"Academy Student","name"=>"academy_student_id","table"=>"academy_students","value"=>"$invoice->academy_student_id"]);
	echo Form::input(["label"=>"Issue Date","type"=>"date","name"=>"issue_date","value"=>"$invoice->issue_date"]);
	echo Form::input(["label"=>"Due Date","type"=>"date","name"=>"due_date","value"=>"$invoice->due_date"]);
	echo Form::input(["label"=>"Total","type"=>"text","name"=>"total","value"=>"$invoice->total"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
