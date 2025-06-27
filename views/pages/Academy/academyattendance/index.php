<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage Attendance"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyattendance/create", "text"=>"Create Attendance"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo AcademyAttendance::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
