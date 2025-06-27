<?php
// Page::open();
// Row::open();
// Col::open();
// Card::open(["title"=>"Create Invoice"]);
// Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
// echo Form::open(["route"=>"invoice/save"]);
// 	echo Form::input(["label"=>"Academy Student","name"=>"academy_student_id","table"=>"academy_students"]);
// 	echo Form::input(["label"=>"Issue Date","type"=>"date","name"=>"issue_date"]);
// 	echo Form::input(["label"=>"Due Date","type"=>"date","name"=>"due_date"]);
// 	echo Form::input(["label"=>"Total","type"=>"text","name"=>"total"]);

// echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
// echo Form::close();
// Card::close();
// Col::close();
// Row::close();
// Page::close();

Page::open();
  Row::open();
  Col::open(["col"=>12]);  



   Card::open(["title"=>"School Invoice"]); 
   Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
   
    Doc::open(["name"=>"create_invoice"]); 
   Card::close();
  Col::close();
  Row::close();
Page::close();
?>