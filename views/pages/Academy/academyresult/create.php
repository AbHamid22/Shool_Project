<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create Result"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyresult", "text"=>"Manage Result"]);
echo Form::open(["route"=>"academyresult/save"]);
	echo Form::input(["label"=>"Academy Student","name"=>"academy_student_id","table"=>"academy_students"]);
	echo Form::input(["label"=>"Academy Subject","name"=>"academy_subject_id","table"=>"academy_subjects"]);
	echo Form::input(["label"=>"Academy Term","name"=>"academy_term_id","table"=>"academy_terms"]);
	echo Form::input(["label"=>"Academy Exam Type","name"=>"academy_exam_type_id","table"=>"academy_exam_types"]);
	echo Form::input(["label"=>"Mark","type"=>"text","name"=>"mark"]);
	echo Form::input(["label"=>"Fullmark","type"=>"text","name"=>"fullmark"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
