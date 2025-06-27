<?php
class Widget{     
      public static function open($arg=[]){        
        component(static::class,$arg["name"],$arg);              
      }
}

?>