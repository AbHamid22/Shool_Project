<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Result Sheet"]);

 echo Doc::open(["name"=>"report_card","student"=>$academyresult->student]);
 
 //echo AcademyResult::report($academyresult->student->id);

Card::close();
Col::close();
Row::close();
Page::close();
