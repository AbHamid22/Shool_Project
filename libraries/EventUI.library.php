<?php
class Event{
   public static function button2($arg){
        $arg["route"]=isset($arg["route"])?$arg["route"]:"#";
        $arg["method"]=isset($arg["method"])?$arg["method"]:"post";
        $arg["class"]=isset($arg["class"])?$arg["class"]:"";
        
        $html="<form action='{$arg["route"]}' method='{$arg["method"]}' style='flex:0 1 0;margin-right:5px'>";
        $html.="<input type='hidden' name='id' value='{$arg["id"]}' />";
        $html.="<input type='submit' class='{$arg["class"]}' name='{$arg["name"]}' value='{$arg["value"]}' />";
        $html.="</form>";
        return $html;
      }

      public static function button($arg){
        global $base_url;
        $arg["route"]=isset($arg["route"])?$arg["route"]:"#";
        $arg["method"]=isset($arg["method"])?$arg["method"]:"post";
        $arg["class"]=isset($arg["class"])?$arg["class"]:"";
        
        $html="<a href='$base_url/{$arg["route"]}' class='{$arg["class"]}'>";      
        $html.=$arg["value"];
        $html.="</a>";
        return $html;
      }
}

?>