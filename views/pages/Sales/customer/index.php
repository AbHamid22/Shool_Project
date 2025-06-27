<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage Customer"]);
Html::link(["class"=>"btn btn-success", "route"=>"customer/create", "text"=>"Create Customer"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo Customer::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
