<?php
// Form Functions
function select_field($arg){
    global $db,$tx; 
   $arg["value"]=isset($arg["value"])?$arg["value"]:""; 
   $id=isset($arg["value_column"])?$arg["value_column"]:"id";  
   $name=isset($arg["display_column"])?$arg["display_column"]:"name";  

   $ucname=ucfirst($arg["name"]);
   //echo "select $id,$name from {$tx}{$arg["table"]}";
   $result=$db->query("select $id,$name from {$tx}{$arg["table"]}");
   $html="<div class='form-group row'>";
   $html.="<label class='col-sm-2 col-form-label'>{$arg["label"]}</label>";
   $html.="<div class='col-sm-10'>"; 
   $html.="<select name='{$arg["name"]}' class='form-select' style='width:100%'>";
   while(list($id,$name)=$result->fetch_row()){
    
     if($id==$arg["value"]){
       $html.="<option value='$id' selected>$name</option>";  
     }else{
       $html.="<option value='$id'>$name</option>";  
     }
 
   }
   $html.="</select>";
   $html.="</div>";
   $html.="</div>";
 
   return $html;
 
 }
 
   function input_button($arg){
      $html="<input type='{$arg["type"]}' value='{$arg["value"]}' name='{$arg["name"]}' class='btn btn-info' />";
      return $html;
   }

   function input_field($arg){

      $arg["required"]=isset($arg["required"])?$arg["required"]:"";
      $arg["placeholder"]=isset($arg["placeholder"])?$arg["placeholder"]:"";
      $arg["value"]=isset($arg["value"])?$arg["value"]:"";     
      $arg["type"]=isset($arg["type"])?$arg["type"]:"text"; 
      $arg["checked"]=isset($arg["checked"])?$arg["checked"]:""; 
  
      $html="<div class='form-group row'>";

       if($arg["type"]!="hidden"){
        $html.="<label for='{$arg["name"]}' class='col-sm-2 col-form-label'>{$arg["label"]}</label>";
       }

       $style="";
       $css_class="form-control";
       if($arg["type"]=="radio" || $arg["type"]=="checkbox")
       {
        $css_class="form-check-input";
        $style="style='width:40px;height:40px;'";
       }

      $html.="<div class='col-sm-10'>";
      $html.="<input type='{$arg["type"]}'  class='$css_class' $style name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>";
      $html.="</div>";
      $html.="</div>";  
  
      return $html;
  
   }

   function input_text($arg){

    $arg["required"]=isset($arg["required"])?$arg["required"]:"";
    $arg["placeholder"]=isset($arg["placeholder"])?$arg["placeholder"]:"";
    $arg["value"]=isset($arg["value"])?$arg["value"]:"";     
    $arg["type"]=isset($arg["type"])?$arg["type"]:"text"; 
    $arg["checked"]=isset($arg["checked"])?$arg["checked"]:""; 

    $html="<div class='form-group row'>";

     if($arg["type"]!="hidden"){
      $html.="<label for='{$arg["name"]}' class='col-sm-2 col-form-label'>{$arg["label"]}</label>";
     }

     $css_class="form-control";
     if($arg["type"]=="radio" || $arg["type"]=="checkbox")
     {
      $css_class="form-check-input";
     }

    $html.="<div class='col-sm-10'>";
    $html.="<input type='{$arg["type"]}' class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>";
    $html.="</div>";
    $html.="</div>";  

    return $html;

 }

   function input_checkbox($arg){
    $arg["required"]=isset($arg["required"])?$arg["required"]:"";
    $arg["placeholder"]=isset($arg["placeholder"])?$arg["placeholder"]:"";
    $arg["value"]=isset($arg["value"])?$arg["value"]:"";     
    $arg["type"]=isset($arg["type"])?$arg["type"]:"text"; 
    $arg["checked"]=isset($arg["checked"])?$arg["checked"]:""; 

    $html="<div class='form-group row'>";

     if($arg["type"]!="hidden"){
      $html.="<label for='{$arg["name"]}' class='col-sm-2 col-form-label'>{$arg["label"]}</label>";
     }

     $css_class="form-control";
     if($arg["type"]=="radio" || $arg["type"]=="checkbox")
     {
      $css_class="form-check-input";
     }

    $html.="<div class='col-sm-10'>";
    $html.="<input type='{$arg["type"]}' class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>";
    $html.="</div>";
    $html.="</div>";  

    return $html;
   }

   function input_radio($arg){
    $arg["required"]=isset($arg["required"])?$arg["required"]:"";
    $arg["placeholder"]=isset($arg["placeholder"])?$arg["placeholder"]:"";
    $arg["value"]=isset($arg["value"])?$arg["value"]:"";     
    $arg["type"]=isset($arg["type"])?$arg["type"]:"text"; 
    $arg["checked"]=isset($arg["checked"])?$arg["checked"]:""; 

    $html="<div class='form-group row'>";

     if($arg["type"]!="hidden"){
      $html.="<label for='{$arg["name"]}' class='col-sm-2 col-form-label'>{$arg["label"]}</label>";
     }

     $css_class="form-control";
     if($arg["type"]=="radio" || $arg["type"]=="checkbox")
     {
      $css_class="form-check-input";
     }

    $html.="<div class='col-sm-10'>";
    $html.="<input type='{$arg["type"]}' class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>";
    $html.="</div>";
    $html.="</div>";  

    return $html;
   }

   function input_textarea($arg){
    $arg["required"]=isset($arg["required"])?$arg["required"]:"";
    $arg["placeholder"]=isset($arg["placeholder"])?$arg["placeholder"]:"";
    $arg["value"]=isset($arg["value"])?$arg["value"]:"";     
    $arg["type"]=isset($arg["type"])?$arg["type"]:"text"; 
    $arg["checked"]=isset($arg["checked"])?$arg["checked"]:""; 

    $html="<div class='form-group row'>";

     if($arg["type"]!="hidden"){
      $html.="<label for='{$arg["name"]}' class='col-sm-2 col-form-label'>{$arg["label"]}</label>";
     }

     $css_class="form-control";
     if($arg["type"]=="radio" || $arg["type"]=="checkbox")
     {
      $css_class="form-check-input";
     }

    $html.="<div class='col-sm-10'>";
    $html.="<input type='{$arg["type"]}' class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>";
    $html.="</div>";
    $html.="</div>";  

    return $html;
   }

   function input_file($arg){
    $arg["required"]=isset($arg["required"])?$arg["required"]:"";
    $arg["placeholder"]=isset($arg["placeholder"])?$arg["placeholder"]:"";
    $arg["value"]=isset($arg["value"])?$arg["value"]:"";     
    $arg["type"]=isset($arg["type"])?$arg["type"]:"text"; 
    $arg["checked"]=isset($arg["checked"])?$arg["checked"]:""; 

    $html="<div class='form-group row'>";

     if($arg["type"]!="hidden"){
      $html.="<label for='{$arg["name"]}' class='col-sm-2 col-form-label'>{$arg["label"]}</label>";
     }

     $css_class="form-control";
     if($arg["type"]=="radio" || $arg["type"]=="checkbox")
     {
      $css_class="form-check-input";
     }

    $html.="<div class='col-sm-10'>";
    $html.="<input type='{$arg["type"]}' class='$css_class' name='{$arg["name"]}' id='{$arg["name"]}' value='{$arg["value"]}' placeholder='{$arg["placeholder"]}' {$arg["required"]} {$arg["checked"]}>";
    $html.="</div>";
    $html.="</div>";  

    return $html;
   }
   
   function PrintDate($day="cmbDay",$month="cmbMonth",$year="cmbYear"){

    $html="";
    $html.="<select name='$day'>";
    for($d=1;$d<=30;$d++){
        $d=str_pad($d,2, '0', STR_PAD_LEFT); 

        if($d==str_pad(date("d"),2,'0',STR_PAD_LEFT)){
          $html.="<option value='$d' selected>$d</option>";
        }else{
          $html.="<option value='$d'>$d</option>";
        }
        
 
    }
    $html.="</select>";
 
    $html.="<select name='$month'>";
     $months=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
    for($d=1;$d<=12;$d++){
        $d=str_pad($d,2,'0',STR_PAD_LEFT); 
        if($d==str_pad(date("m"),2,'0',STR_PAD_LEFT)){
          $html.="<option value='$d' selected>{$months[$d-1]}</option>";
        }else{
          $html.="<option value='$d'>{$months[$d-1]}</option>";
        }
 
    }
    $html.="</select>";
    $html.="<select name='$year'>";
    
   for($d=date("Y")-60;$d<=date("Y")+3;$d++){    

       if(date("Y")==$d){
         $html.="<option value='$d' selected>$d</option>";
       }else{
         $html.="<option value='$d'>$d</option>";
       }

   }
   $html.="</select>";
    return $html;
 }
 
   function PrintTime($hour="cmbHour",$min="cmbMin",$ampm="cmbAMPM"){
 
    $html="<select name='$hour'>";
    for($h=1;$h<=12;$h++){
       $h=str_pad($h,2, '0', STR_PAD_LEFT); 
       $html.="<option value='$h'>$h</option>";
    }
    $html.="</select>";
 
    $html.="<select name='$min'>";
    for($h=1;$h<=60;$h++){
        $h=str_pad($h,2, '0', STR_PAD_LEFT); 
       $html.="<option value='$h'>$h</option>";
    }
    $html.="</select>";
 
    $html.="<select name='$ampm'>";
    $html.="<option value='AM'>AM</option>";
    $html.="<option value='PM'>PM</option>";
    $html.="</select>";
   
     return $html;
 
 
 }

   


?>