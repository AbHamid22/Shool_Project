<?php
// Page::open();
// Row::open();
// Col::open();
// Card::open(["title"=>"Show Invoice"]);
// Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
// echo Invoice::html_row_details($id);
// Card::close();
// Col::close();
// Row::close();
// Page::close();



Page::open();

  Row::open();

  Col::open(["col"=>12]);  
 

  
   Card::open();   

  //  Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
   
  
   
   $details=InvoiceDetail::all_by_invoice_id($invoice->id);
   $academystudent=AcademyStudent::find($invoice->academy_student_id);


//    print_r($details);

   Doc::open([
    "name"=>"invoice_details",
    "invoice"=>$invoice,
    "details"=>$details,
    "academystudent"=>$academystudent
  ]);
 
   Card::close();
  Col::close();
  Row::close();
Page::close();
?>