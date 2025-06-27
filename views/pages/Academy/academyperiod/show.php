<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Period"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyperiod", "text"=>"Manage Period"]);
echo AcademyPeriod::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
