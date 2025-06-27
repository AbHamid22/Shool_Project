<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage Current Class"]);
Html::link(["class"=>"btn btn-success", "route"=>"academycurrentclasse/create", "text"=>"Create Current Class"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo AcademyCurrentClasse::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
