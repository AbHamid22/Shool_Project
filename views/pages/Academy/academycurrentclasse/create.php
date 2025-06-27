<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create Current Class"]);
Html::link(["class"=>"btn btn-success", "route"=>"academycurrentclasse", "text"=>"Manage Current Class"]);
echo Form::open(["route"=>"academycurrentclasse/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
