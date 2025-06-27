<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Section"]);
Html::link(["class"=>"btn btn-success", "route"=>"academysection", "text"=>"Manage Section"]);
echo Form::open(["route"=>"academysection/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$academysection->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$academysection->name"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-0" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
