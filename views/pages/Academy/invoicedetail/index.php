<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Manage InvoiceDetail"]);
Html::link(["class"=>"btn btn-success", "route"=>"invoicedetail/create", "text"=>"Create Invoice"]);
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo InvoiceDetail::html_table($page,10);
Card::close();
Col::close();
Row::close();
Page::close();
