<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create Routine"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyroutine", "text"=>"Manage Routine"]);
echo Form::open(["route"=>"academyroutine/save"]);
	echo Form::input(["label"=>"Academy Class","name"=>"academy_class_id","table"=>"academy_classes"]);
	echo Form::input(["label"=>"Academy Subject","name"=>"academy_subject_id","table"=>"academy_subjects"]);
	echo Form::input(["label"=>"Academy Teacher","name"=>"academy_teacher_id","table"=>"academy_teachers"]);
	echo Form::input(["label"=>"Day","type"=>"text","name"=>"day"]);
	echo Form::input(["label"=>"Time","type"=>"text","name"=>"time"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
