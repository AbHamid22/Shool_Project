<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Result"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyresult", "text"=>"Manage Result"]);
echo Form::open(["route"=>"academyresult/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$academyresult->id"]);
	echo Form::input(["label"=>"Academy Student","name"=>"academy_student_id","table"=>"academy_students","value"=>"$academyresult->academy_student_id"]);
	echo Form::input(["label"=>"Academy Subject","name"=>"academy_subject_id","table"=>"academy_subjects","value"=>"$academyresult->academy_subject_id"]);
	echo Form::input(["label"=>"Academy Term","name"=>"academy_term_id","table"=>"academy_terms","value"=>"$academyresult->academy_term_id"]);
	echo Form::input(["label"=>"Academy Exam Type","name"=>"academy_exam_type_id","table"=>"academy_exam_types","value"=>"$academyresult->academy_exam_type_id"]);
	echo Form::input(["label"=>"Mark","type"=>"text","name"=>"mark","value"=>"$academyresult->mark"]);
	echo Form::input(["label"=>"Fullmark","type"=>"text","name"=>"fullmark","value"=>"$academyresult->fullmark"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-0" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
