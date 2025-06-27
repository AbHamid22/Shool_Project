<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage Admission"]);
Html::link(["class"=>"btn btn-success", "route"=>"academyadmission/create", "text"=>"Create Admission"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo AcademyAdmission::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
