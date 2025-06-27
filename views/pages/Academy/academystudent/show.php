<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Student"]);
Html::link(["class"=>"btn btn-success", "route"=>"academystudent", "text"=>"Manage Student"]);
echo AcademyStudent::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
