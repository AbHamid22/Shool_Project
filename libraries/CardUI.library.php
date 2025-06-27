<?php
class Card{  

    public static function open($arg=[]){
    
      $arg["title"]=isset($arg["title"])?$arg["title"]:"";
      
      $arg["class-head"]=isset($arg["class-head"])?$arg["class-head"]:"";
      $arg["class-body"]=isset($arg["class-body"])?$arg["class-body"]:"";
      $arg["class-title"]=isset($arg["class-title"])?$arg["class-title"]:"";
     
      component(static::class,"open",$arg);      
      
    }
  
    public static function close($arg=[]){          
      component(static::class,"close",$arg); 
    }
  }
?>