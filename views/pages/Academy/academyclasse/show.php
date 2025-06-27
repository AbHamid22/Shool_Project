<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Class"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyclasse", "text"=>"Manage Class"]);
echo AcademyClasse::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
