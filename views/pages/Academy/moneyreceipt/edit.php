<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit MoneyReceipt"]);
Html::link(["class"=>"btn btn-success", "route"=>"moneyreceipt", "text"=>"Manage MoneyReceipt"]);
echo Form::open(["route"=>"moneyreceipt/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$moneyreceipt->id"]);
	echo Form::input(["label"=>"Student","name"=>"academy_student_id","table"=>"academy_students","value"=>"$moneyreceipt->academy_student_id"]);
	echo Form::input(["label"=>"Remark","type"=>"textarea","name"=>"remark","value"=>"$moneyreceipt->remark"]);
	echo Form::input(["label"=>"Receipt Total","type"=>"text","name"=>"receipt_total","value"=>"$moneyreceipt->receipt_total"]);
	// echo Form::input(["label"=>"Discount","type"=>"text","name"=>"discount","value"=>"$moneyreceipt->discount"]);
	// echo Form::input(["label"=>"Vat","type"=>"text","name"=>"vat","value"=>"$moneyreceipt->vat"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
