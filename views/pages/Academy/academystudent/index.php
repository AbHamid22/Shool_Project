<?php
Page::open();
Row::open();

Col::open();
Html::link(["class"=>"btn btn-success", "route"=>"academystudent/create", "text"=>"Create Student"]);
Col::close();
Col::open();
Card::open(["title"=>"Manage Student"]);

$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo AcademyStudent::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
