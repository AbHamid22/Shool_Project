<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Student"]);
Html::link(["class"=>"btn btn-success", "route"=>"customer", "text"=>"Manage Student"]);
echo Form::open(["route"=>"customer/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$customer->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$customer->name"]);
	echo Form::input(["label"=>"Mobile","type"=>"text","name"=>"mobile","value"=>"$customer->mobile"]);
	// echo Form::input(["label"=>"Email","type"=>"text","name"=>"email","value"=>"$customer->email"]);
	echo Form::input(["label"=>"Fathers Name","type"=>"text","name"=>"fathers_name","value"=>"$customer->fathers_name"]);
	echo Form::input(["label"=>"Mothers Name","type"=>"text","name"=>"mothers_name","value"=>"$customer->mothers_name"]);
	echo Form::input(["label"=>"Address","type"=>"textarea","name"=>"address","value"=>"$customer->address"]);
	echo Form::input(["label"=>"Photo","type"=>"file","name"=>"photo","value"=>$customer->photo]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-0" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
