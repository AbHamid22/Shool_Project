<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Routine"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyroutine", "text"=>"Manage Routine"]);
echo Form::open(["route"=>"academyroutine/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$academyroutine->id"]);
	echo Form::input(["label"=>"Academy Class","name"=>"academy_class_id","table"=>"academy_classes","value"=>"$academyroutine->academy_class_id"]);
	echo Form::input(["label"=>"Academy Subject","name"=>"academy_subject_id","table"=>"academy_subjects","value"=>"$academyroutine->academy_subject_id"]);
	echo Form::input(["label"=>"Academy Teacher","name"=>"academy_teacher_id","table"=>"academy_teachers","value"=>"$academyroutine->academy_teacher_id"]);
	echo Form::input(["label"=>"Day","type"=>"text","name"=>"day","value"=>"$academyroutine->day"]);
	echo Form::input(["label"=>"Time","type"=>"text","name"=>"time","value"=>"$academyroutine->time"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-0" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
