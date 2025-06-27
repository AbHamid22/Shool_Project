<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show ExamType"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyexamtype", "text"=>"Manage AcademyExamType"]);
echo AcademyExamType::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
