<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage School Payment"]);
	$current_page=isset($_GET["page"])?$_GET["page"]:1;
	echo Order::html_table($current_page,3);
Card::close();
Col::close();
Row::close();
Page::close();
?>

