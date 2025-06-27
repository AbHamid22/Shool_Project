<?php
echo Page::title(["title"=>"Manage Student"]);
echo Page::body_open();
echo Page::context_open();
//echo Table::manage("cattles",$columns=["*"],$route="");
$page=isset($_GET["page"])?$_GET["page"]:1;
echo Student::html_table($page);
echo Page::context_close();
echo Page::body_close();
