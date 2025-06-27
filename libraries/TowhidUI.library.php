<?php

class Towhid{

    public static function about(){
        return "Mohammad Towhidul Islam";
    }

    public function contact(){
        return "01715785634";
    }

    public static function link($name,$link){
        return "<a href='$link'>$name<a>";
    }

    public static function circle($arg){       
       $html="<div class='circle' style='background-color:{$arg["color"]}'>";       
       $html.=$arg["value"];
       $html.="</div>";
       return $html;
    }

    public static function square($arg){
        $html="<div class='square' style='background-color:{$arg["color"]}'>";       
        $html.=$arg["value"];
        $html.="</div>";
        return $html;
    }

    public static function item($arg){
      $html="<div class='card' style='width: 18rem;'>";
      $html.="<img src='{$arg["src"]}' class='card-img-top' alt='{$arg["name"]}'>";
      $html.="<div class='card-body'>";
      $html.="<h5 class='card-title'>{$arg["name"]}</h5>";
      $html.="<p class='card-text'>{$arg["description"]}</p>";
      $html.="<a href='#' class='btn btn-primary'>Add to cart</a>";
      $html.="</div>";
      $html.="</div>";
      return $html;
    } 


}
?>