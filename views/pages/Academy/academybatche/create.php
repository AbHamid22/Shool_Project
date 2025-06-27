<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create Batch"]);
Html::link(["class"=>"btn btn-success", "route"=>"academybatche", "text"=>"Manage Batch"]);
echo Form::open(["route"=>"academybatche/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);
	echo Form::input(["label"=>"Current Class","name"=>"current_class_id","table"=>"academy_current_classes"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
