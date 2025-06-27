<?php
Page::open();
Row::open([]);
Col::open(["col"=>"12"]);
 Card::open([]);
  Page::title("Page Title");
 Card::close();
Col::close();
Row::close();
Row::open([]);
Col::open(["col"=>"12"]);
 Card::open(["title"=>"Basic Page"]);
   echo "hello";
 Card::close();
Col::close();
Row::close();
Page::close();

?>