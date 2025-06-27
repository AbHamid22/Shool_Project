<?php

$widget1=["title"=>"Sales Info","menu"=>[
  ["href"=>"#","text"=>"Create"],
  ["href"=>"#","text"=>"Delete"],
  ["href"=>"#","text"=>""],
  ["href"=>"#","text"=>"View"]]
];

$widget2=["title"=>"Inventory","menu"=>[
  ["href"=>"#","text"=>"View"],
  ["href"=>"#","text"=>"Export"],
  ["href"=>"#","text"=>""],
  ["href"=>"#","text"=>"Remove"]]
];

Page::open();
    Row::open(["id"=>"r1"]);
      Col::open(["id"=>"c1","col"=>"6"]);
        Card::open($widget1);    
          Widget::open(["name"=>"sales"]); 
        Card::close();
      Col::close();
      Col::open(["id"=>"c2","col"=>"6"]);
        Card::open($widget2);
          Widget::open(["name"=>"widget2"]); 
       Card::close();
      Col::close();
    Row::close();

  Row::open(["id"=>"r1"]);
   Col::open(["id"=>"c1","col"=>"12"]);
     Card::open(["title"=>"Purchase Info"]);
      Widget::open(["name"=>"widget3"]); 
     Card::close();
    Col::close(); 
 Row::close();
Page::close();

?>