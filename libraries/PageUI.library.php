<?php
class Page{

  public static function path(){
    global $template;
    return $path="views/components/$template/Page";
  }

public static function open($arg=[]){
  
  include(Page::path()."/open.php");
 
}

public static function close(){
  global $app_name;
  
  include(Page::path()."/close.php");
  
}


public static function title($arg){    
    $title=isset($arg["title"])?$arg["title"]:"Page Title";
       
    include(Page::path()."/title.php");
     

} //end title   
    
      
    public static function body_open($arg=["col"=>12]){
      
       $col=$arg["col"];
       include(Page::path()."/body_open.php");
  
    }
    
    public static function body_close(){
     
      include(Page::path()."/body_close.php");
      
    }
    
    public static function context_open($arg=[]){
     
       global $base_url;     
        $arg["title"]=isset($arg["title"])?$arg["title"]:"&nbsp;"; 
        $arg["route"]=isset($arg["route"])?$arg["route"]:"#"; 
         
        include(Page::path()."/context_open.php");        

       
      }
      
      public static function context_close(){  
       
         include(Page::path()."/context_close.php");
        
       }    
      

}

?>