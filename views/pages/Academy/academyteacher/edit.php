<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Teacher"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyteacher", "text"=>"Manage Teacher"]);
echo Form::open(["route"=>"academyteacher/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$academyteacher->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$academyteacher->name"]);
	echo Form::input(["label"=>"Contact No","type"=>"text","name"=>"contact_no","value"=>"$academyteacher->contact_no"]);
	echo Form::input(["label"=>"Position","type"=>"text","name"=>"position","value"=>"$academyteacher->position"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-0" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
