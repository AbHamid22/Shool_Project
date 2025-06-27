<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Admission"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyadmission", "text"=>"Manage Admission"]);
echo AcademyAdmission::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
