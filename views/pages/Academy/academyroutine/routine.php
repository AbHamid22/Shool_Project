<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Routine"]);

 echo Doc::open(["name"=>"routine_card","routine"=>$academyroutine->routine]);
 
 //echo AcademyResult::report($academyresult->student->id);

Card::close();
Col::close();
Row::close();
Page::close();
