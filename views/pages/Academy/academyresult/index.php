<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage Result"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyresult/create", "text"=>"Create Result"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo AcademyResult::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
