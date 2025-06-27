<?php

class Html{
    public static function link($arg=[]){
        global $base_url;
        $arg["class"]=isset($arg["class"])?$arg["class"]:"btn btn-primary";
        component(static::class,"a",$arg);         
       // return "<a href='$base_url/{$arg["route"]}' class='{$arg["class"]}'>{$arg["text"]}</a>";
    }
}




