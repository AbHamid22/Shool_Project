<?php
Page::open();
 Row::open();
  Col::open();

  Card::open(["title"=>"Payment Management"]); 
  Html::link(["class"=>"btn btn-success", "route"=>"moneyreceipt", "text"=>"Manage Money Receipt"]);

       Doc::open(["name"=>"create_money_receipt"]);
   Card::close();    

  Col::close();
 Row::close();
Page::close();

?>