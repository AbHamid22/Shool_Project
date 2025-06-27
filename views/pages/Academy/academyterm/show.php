<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show ExamTerm"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyterm", "text"=>"Manage ExamTerm"]);
echo AcademyTerm::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
