<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Create Period"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyperiod", "text"=>"Manage Period"]);
echo Form::open(["route"=>"academyperiod/save"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name"]);
	echo Form::input(["label"=>"Time","type"=>"text","name"=>"time"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-0", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
