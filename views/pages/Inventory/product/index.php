<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage Product"]);
Html::link(["class"=>"btn btn-success", "route"=>"product/create", "text"=>"Create Product"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo Product::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
