
<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Class Routine"]);
//Html::link(["class"=>"btn btn-success", "route"=>"academystudent/create", "text"=>"Create AcademyStudent"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo AcademyRoutine::html_routines($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
