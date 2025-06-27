<?php
class Row{
    public static function open($arg=[]){ 
      $arg["spacing"]=isset($arg["spacing"])?$arg["spacing"]:"mt-3";
      $arg["g"]=isset($arg["g"])?$arg["g"]:"g-3";
     
      component(static::class,"open",$arg); 
    }
  
    public static function close($arg=[]){           
      
      component(static::class,"close",$arg); 
    }
  }
  
?>