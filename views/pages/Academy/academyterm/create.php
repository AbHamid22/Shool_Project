<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create ExamTerm"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyterm", "text"=>"Manage ExamTerm"]);
echo Form::open(["route"=>"academyterm/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
