<?php
class Menu{   

   public static function item($arg=[]){     
   
        $arg["icon"]=isset($arg["icon"])?$arg["icon"]:"nav-icon fa fa-arrow-right";
        $arg["route"]=isset($arg["route"])?$arg["route"]:"javascript:void(0)";
                       
       // include(Menu::path()."/item.php");
        component(static::class,"item",$arg); 
     

   }
}
?>