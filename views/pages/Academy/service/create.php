<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create Service"]);
Html::link(["class"=>"btn btn-success", "route"=>"service", "text"=>"Manage Service"]);
echo Form::open(["route"=>"service/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);
	echo Form::input(["label"=>"Amount","type"=>"text","name"=>"amount"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
