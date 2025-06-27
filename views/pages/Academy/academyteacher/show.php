<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Teacher"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyteacher", "text"=>"Manage Teacher"]);
echo AcademyTeacher::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
