<?php
// Event Functions 
function action_button($arg=[]){
    $arg["url"]=isset($arg["url"])?$arg["url"]:"#";
    
    $arg["class"]=isset($arg["class"])?$arg["class"]:"";
    $html="<form action='{$arg["url"]}' method='post' style='flex:0 1 0;margin-right:5px'>";
    $html.="<input type='hidden' name='txtId' value='{$arg["id"]}' />";
    $html.="<input type='submit' class='btn btn-{$arg["class"]}' name='btn{$arg["name"]}' value='{$arg["value"]}' />";
    $html.="</form>";
    return $html;
  }

?>