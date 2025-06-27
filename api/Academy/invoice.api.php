<?php

class InvoiceApi{

  static function save($data){  
    
   
    $issue_date=$data->issue_date;
    $due_date=$data->due_date;   
    // $created_at=$data->created_at; 

    $issue_date=date("Y-m-d",strtotime($issue_date));//convert date into mysql format
    $due_date=date("Y-m-d",strtotime($due_date));//convert date into mysql format
    // $created_at=date("Y-m-d",strtotime($created_at));//convert date into mysql format

    $services=$data->services;
       
    $invoice=new Invoice();  

		$invoice->academy_student_id=$data->academy_student_id;
		$invoice->issue_date=$issue_date;
		$invoice->due_date=$due_date;
		$invoice->total=$data->total;		
		
    $invoice_id=$invoice->save();  //save database at this point
    
    // $now=date("Y-m-d H:i:s"); 

    foreach($services as $service){

      $invoicedetails=new InvoiceDetail();
      
      $invoicedetails->invoice_id=$invoice_id;
      $invoicedetails->service_id=$service->item_id;

      $invoicedetails->price=$service->price;
   
      $invoicedetails->save();
            
    }

   
    echo json_encode(["status" => "success"]);
  
  

  }//end function


  function find($data){
    
    $invoice_id=$data->id;
    $invoice=Invoice::find($invoice_id);
    $academystudent=AcademyStudent::find($invoice->academy_student_id);
    $services=InvoiceDetail::all_by_invoice_id($invoice_id);

		echo json_encode(["invoice"=>$invoice,"academystudent"=>$academystudent,"services"=>$services]);
	}
   
}//end class
?>