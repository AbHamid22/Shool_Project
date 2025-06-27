<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Attendance"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyattendance", "text"=>"Manage Attendance"]);
echo AcademyAttendance::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
