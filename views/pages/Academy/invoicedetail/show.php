<?php
Page::open();
Row::open();
Col::open();
Card::open(["title"=>"Show InvoiceDetail"]);
Html::link(["class"=>"btn btn-success", "route"=>"invoicedetail", "text"=>"Manage InvoiceDetail"]);
echo InvoiceDetail::html_row_details($id);
Card::close();
Col::close();
Row::close();
Page::close();
