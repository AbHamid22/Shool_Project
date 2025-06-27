<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Period"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyperiod", "text"=>"Manage Period"]);
echo Form::open(["route"=>"academyperiod/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$academyperiod->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$academyperiod->name"]);
	echo Form::input(["label"=>"Time","type"=>"text","name"=>"time","value"=>"$academyperiod->time"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-0" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
