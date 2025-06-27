<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Attendace Records"]);

 echo Doc::open(["name"=>"create_attendance","attendance"=>$academyattendance]);
 
 //echo AcademyResult::report($academyresult->student->id);

Card::close();
Col::close();
Row::close();
Page::close();
