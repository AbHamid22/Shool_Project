<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Batch"]);
Html::link(["class"=>"btn btn-success", "route"=>"academybatche", "text"=>"Manage Batch"]);
echo AcademyBatche::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
