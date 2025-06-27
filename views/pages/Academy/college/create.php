<?php
 echo Page::open();
  echo Row::open();   
  echo Col::open(["col"=>12]);   
    echo Card::open(["title"=>"College Information"]);
     
     echo Form::open(["route"=>"school/save"]);
       echo Form::input(["label"=>"Name","name"=>"name","type"=>"text"]);
       echo Form::input(["label"=>"City","table"=>"users","name"=>"city"]);
       echo Form::input(["label"=>"Address","name"=>"address","type"=>"textarea"]);
     
       echo Form::close();    
    echo Card::close();
  echo Col::close();
  echo Row::close();
  
 echo Page::close();
?>