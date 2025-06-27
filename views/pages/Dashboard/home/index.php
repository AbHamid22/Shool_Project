<?php
$widget1=["title"=>"School Information","class-head"=>"bg bg-success","class-body"=>"bg bg-","menu"=>
[
  ["href"=>"#","text"=>"Create"],
  ["href"=>"#","text"=>"Delete"],
  ["href"=>"#","text"=>""],
  ["href"=>"#","text"=>"View"]
  ]
];

Page::open();
    Row::open(["id"=>"r1"]);
      Col::open(["id"=>"c1","col"=>"12"]);
        Card::open($widget1);    
          Widget::open(["name"=>"sales"]); 
        Card::close();
      Col::close();
    Row::close();
   Page::close();
?>

<?php
Page::open();
  Row::open();
  Col::open();  
  
    Doc::open(["name"=>"create_records"]);

  Col::close();
  Row::close();
Page::close();
?>

<?php
 Page::open();
  Row::open(["g"=>"2"]);
  //Col1
   Col::open(["col"=>3]);
    Card::open(["title"=>"<h3>Total Students</h3>","class-head"=>"bg bg-primary","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
       
         echo AcademyStudent::count();
    Card::close();
   Col::close();

  //Col2
   Col::open(["col"=>3]);
   Card::open(["title"=>"<h3>Total Teachers</h3>","class-head"=>"bg bg-danger","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
   echo AcademyTeacher::count();
   Card::close();
  Col::close();
  //Col3
  Col::open(["col"=>3]);
  Card::open(["title"=>"<h3>Total Attendance</h3>","class-head"=>"bg bg-warning","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
  echo AcademyAttendance::count();
  Card::close();
 Col::close();

 Col::open(["col"=>3]);
 Card::open(["title"=>"<h3>Total Employee</h3>","class-head"=>"bg bg-info","class-body"=>"bg bg-light fs-5 fw-bolder d-flex justify-content-center align-items-center"]);
 echo "4";
 Card::close();
Col::close();
  
  Row::close();
 Page::close();
?>