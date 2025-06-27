<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show Product"]);
Html::link(["class"=>"btn btn-success", "route"=>"product", "text"=>"Manage Product"]);
echo Product::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
