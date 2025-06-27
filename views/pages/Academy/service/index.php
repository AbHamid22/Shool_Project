<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage Service"]);
Html::link(["class"=>"btn btn-success", "route"=>"service/create", "text"=>"Create Service"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo Service::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
