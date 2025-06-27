<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Service"]);
Html::link(["class"=>"btn btn-success", "route"=>"service", "text"=>"Manage Service"]);
echo Service::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
