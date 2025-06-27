<?php
class Col{
    public static function open($arg=["col"=>12]){
      
      $col["col"]=isset($arg["col"])?$arg["col"]:12;      
      component(static::class,"open",$arg); 
     
    }
  
    public static function close($arg=[]){        
      
      component(static::class,"close",$arg); 
    }
  }
  

?>