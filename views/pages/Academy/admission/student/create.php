<?php
echo Page::title(["title"=>"Create Student"]);
echo Page::body_open();
echo Page::context_open();

//FormOpen
echo Form::open(["route"=>"save"]);

echo Form::text(["label"=>"Student Name","name"=>"name","type"=>"text","placeholder"=>"Enter Name"]);
echo Form::text(["label"=>"Father's Name","name"=>"fathers_name","type"=>"text"]);
echo Form::text(["label"=>"Mother's Name","name"=>"mothers_name","type"=>"text"]);
echo Form::text(["label"=>"Dob","name"=>"dob","type"=>"date"]);
echo Form::text(["label"=>"Contact No","name"=>"contact_no","type"=>"text"]);
echo Form::text(["label"=>"Photo","name"=>"photo","type"=>"file"]);
echo Form::text(["label"=>"Address","name"=>"address","type"=>"textarea"]);
echo Form::button(["name"=>"create","value"=>"Save","type"=>"submit"]);
echo Form::close();
//FormClose

echo Page::context_close();
echo Page::body_close();

?>