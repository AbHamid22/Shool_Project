<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Edit InvoiceDetail"]);
Html::link(["class"=>"btn btn-success", "route"=>"invoicedetail", "text"=>"Manage InvoiceDetail"]);
echo Form::open(["route"=>"invoicedetail/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$invoicedetail->id"]);
	echo Form::input(["label"=>"Invoice","name"=>"invoice_id","table"=>"invoices","value"=>"$invoicedetail->invoice_id"]);
	echo Form::input(["label"=>"Service","name"=>"service_id","table"=>"services","value"=>"$invoicedetail->service_id"]);
	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price","value"=>"$invoicedetail->price"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
