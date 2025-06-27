<?php
Page::open();
Row::open();

Col::open();
Html::link(["class"=>"btn btn-info", "route"=>"customer/create", "text"=>"<h3>Create Student</h3>"]);
Col::close();

Col::open();
Card::open(["title"=>"Manage Student"]);

$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo Customer::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
