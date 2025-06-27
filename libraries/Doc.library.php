<?php
class Doc{    
    public static function open($arg=["name"=>"doc1"]){       
        component(static::class,$arg["name"],$arg); 
   }
}
