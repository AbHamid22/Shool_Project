<?php
// Page::open();
// Row::open();
// Col::open();
// Card::open(["title"=>"Create InvoiceDetail"]);
// Html::link(["class"=>"btn btn-success", "route"=>"invoicedetail", "text"=>"Manage InvoiceDetail"]);
// echo Form::open(["route"=>"invoicedetail/save"]);
// 	echo Form::input(["label"=>"Invoice","name"=>"invoice_id","table"=>"invoices"]);
// 	echo Form::input(["label"=>"Service","name"=>"service_id","table"=>"services"]);
// 	echo Form::input(["label"=>"Price","type"=>"text","name"=>"price"]);

// echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
// echo Form::close();
// Card::close();
// Col::close();
// Row::close();
// Page::close();


Page::open();
  Row::open();
  Col::open(["col"=>12]);  

  Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);

   Card::open(["title"=>"School Invoice"]); 
   
   
    Doc::open(["name"=>"create_invoice"]); 
   Card::close();
  Col::close();
  Row::close();
Page::close();
?>