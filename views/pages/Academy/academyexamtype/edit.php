<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit ExamType"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyexamtype", "text"=>"Manage ExamType"]);
echo Form::open(["route"=>"academyexamtype/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$academyexamtype->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$academyexamtype->name"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-0" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
