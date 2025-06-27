<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Current Class"]);
Html::link(["class"=>"btn btn-success", "route"=>"academycurrentclasse", "text"=>"Manage Current Class"]);
echo AcademyCurrentClasse::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
