<?php

function component($class,$file,$arg=[]){ 
  global $template,$sector,$base_url;
    $path="views/components/$template/$class"; 
   if($class=="Widget" || $class=="Doc"){
    $path="views/components/$template/$class/$sector"; 
   }
  
  include("$path/{$file}.php");    
}

?>