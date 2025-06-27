<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Student"]);
Html::link(["class"=>"btn btn-success", "route"=>"academystudent", "text"=>"Manage Student"]);
echo Form::open(["route"=>"academystudent/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$academystudent->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$academystudent->name"]);
	echo Form::input(["label"=>"Fathers Name","type"=>"text","name"=>"fathers_name","value"=>"$academystudent->fathers_name"]);
	echo Form::input(["label"=>"Mothers Name","type"=>"text","name"=>"mothers_name","value"=>"$academystudent->mothers_name"]);
	echo Form::input(["label"=>"Academy Batch","name"=>"academy_batch_id","table"=>"academy_batches","value"=>"$academystudent->academy_batch_id"]);
	echo Form::input(["label"=>"Dob","type"=>"text","name"=>"dob","value"=>"$academystudent->dob"]);
	echo Form::input(["label"=>"Photo","type"=>"file","name"=>"photo","value"=>$academystudent->photo]);
	echo Form::input(["label"=>"Contact No","type"=>"text","name"=>"contact_no","value"=>"$academystudent->contact_no"]);
	echo Form::input(["label"=>"Address","type"=>"textarea","name"=>"address","value"=>"$academystudent->address"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-0" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
