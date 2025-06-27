<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Routine"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyroutine", "text"=>"Manage Routine"]);
echo AcademyRoutine::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
