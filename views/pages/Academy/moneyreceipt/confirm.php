<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Confirm Delete"]);
Form::open(["route"=>"moneyreceipt/delete/$id"]);

echo MoneyReceipt::html_row_details($id);
Form::input(["name"=>"id", "type"=>"hidden", "value"=>$id]);
Form::input(["name"=>"delete", "class"=>"btn btn-danger", "value"=>"Delete", "type"=>"submit"]);
Form::close();
Card::close();
Col::close();
Row::close();
Page::close();
