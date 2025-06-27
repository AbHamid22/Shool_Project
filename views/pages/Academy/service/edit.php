<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit Service"]);
Html::link(["class"=>"btn btn-success", "route"=>"service", "text"=>"Manage Service"]);
echo Form::open(["route"=>"service/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$service->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$service->name"]);
	echo Form::input(["label"=>"Amount","type"=>"text","name"=>"amount","value"=>"$service->amount"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
