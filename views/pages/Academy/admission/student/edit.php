<?php
echo Page::title(["title"=>"Edit Student"]);
echo Page::body_open();
echo Page::context_open();

//FormOpen
echo Form::open(["route"=>$base_url."/student/update"]);
echo Form::text(["label"=>"Student Name","value"=>$student->id ,"name"=>"id","type"=>"hidden"]);
echo Form::text(["label"=>"Student Name","value"=>$student->name ,"name"=>"name","type"=>"text","placeholder"=>"Enter Name"]);
echo Form::text(["label"=>"Father's Name","value"=>$student->fathers_name,"name"=>"fathers_name","type"=>"text"]);
echo Form::text(["label"=>"Mother's Name","value"=>$student->mothers_name,"name"=>"mothers_name","type"=>"text"]);
echo Form::text(["label"=>"Dob","value"=>$student->dob,"name"=>"dob","type"=>"date"]);
echo Form::text(["label"=>"Contact No","value"=>$student->contact_no,"name"=>"contact_no","type"=>"text"]);
echo Form::text(["label"=>"Photo","name"=>"photo","type"=>"file","value"=>$student->photo]);
echo Form::text(["label"=>"Address","value"=>$student->address,"name"=>"address","type"=>"textarea"]);
echo Form::button(["name"=>"update","value"=>"Update","type"=>"submit"]);
echo Form::close();
//FormClose

echo Page::context_close();
echo Page::body_close();

?>