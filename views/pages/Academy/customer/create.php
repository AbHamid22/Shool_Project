<?php
Page::open();
Row::open();
Col::open();
Html::link(["class"=>"btn btn-success", "route"=>"customer", "text"=>"<h3>Manage Student</h3>"]);
Col::close();


Col::open();
Card::open(["title"=>"Create Student"]);
echo Form::open(["route"=>"customer/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);
	echo Form::input(["label"=>"Mobile","type"=>"text","name"=>"mobile"]);
	// echo Form::input(["label"=>"Email","type"=>"text","name"=>"email"]);
	echo Form::input(["label"=>"Fathers Name","type"=>"text","name"=>"fathers_name"]);
	echo Form::input(["label"=>"Mothers Name","type"=>"text","name"=>"mothers_name"]);
	echo Form::input(["label"=>"Address","type"=>"textarea","name"=>"address"]);
	echo Form::input(["label"=>"Photo","type"=>"file","name"=>"photo"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
