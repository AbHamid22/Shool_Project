<?php
Page::open();
  Row::open();
  Col::open(["col"=>12]);  
   Card::open();    
   
   $details=OrderDetail::all_by_order_id($order->id);
   $customer=Customer::find($order->customer_id);

  //  print_r($details);

   Doc::open([
    "name"=>"order_details",
    "order"=>$order,
    "details"=>$details,
    "customer"=>$customer
  ]);

   Card::close();
  Col::close();
  Row::close();
Page::close();
?>