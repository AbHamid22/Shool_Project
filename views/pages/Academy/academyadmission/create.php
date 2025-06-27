<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create Admission"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyadmission", "text"=>"Manage Admission"]);
echo Form::open(["route"=>"academyadmission/save"]);
	echo Form::input(["label"=>"Academy Student","name"=>"academy_student_id","table"=>"academy_students"]);
	echo Form::input(["label"=>"Academy Batch","name"=>"academy_batch_id","table"=>"academy_batches"]);
	echo Form::input(["label"=>"Academy Section","name"=>"academy_section_id","table"=>"academy_sections"]);
	echo Form::input(["label"=>"Roll","type"=>"text","name"=>"roll"]);
	echo Form::input(["label"=>"Academy Class","name"=>"academy_class_id","table"=>"academy_classes"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
