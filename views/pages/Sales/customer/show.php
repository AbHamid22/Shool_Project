<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Customer"]);
Html::link(["class"=>"btn btn-success", "route"=>"customer", "text"=>"Manage Customer"]);
echo Customer::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
