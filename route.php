<?php
if(isset($_GET["class"])){
    $class=$_GET["class"]."Controller";
      
    //check if class exists
    if(class_exists($class)){

        $obj=new $class(); 

        if(!isset($_GET["method"]))
        {
          $method="index";
        }else{
          $method=$_GET["method"];
        }   
        
        //check if id exists
        if(isset($_GET["id"])){
         $id=$_GET["id"];          
         if(is_numeric($id)){
            $id=$_GET["id"];
         }else{
            $id="";
         }

        }
                    
        $res_method = $_SERVER['REQUEST_METHOD'];
        $params=[];


        //check if method exists
        if(method_exists($obj,$method)){
         
          if($res_method=="POST"){
  
            //$params=array_values($_POST); 
            $params=$_POST;
             
  
          }else if($res_method=="GET"){ 
            //$params=array_values($_GET); 
            $params=$_GET;         
  
          }else if($res_method=="PUT"){
            
            //parse_str(file_get_contents("php://input"),$_PUT); 
            _parsePut();
           // $params=array_values($_PUT);         
            $params=$_PUT; 
  
          }else if($res_method=="DELETE"){
  
            //parse_str(file_get_contents("php://input"),$_DELETE);      
            _parseDelete();
           // $params=array_values($_DELETE);    
            $params=$_DELETE; 
          }else if($res_method=="PATCH"){
  
            //parse_str(file_get_contents("php://input"),$_DELETE);      
            _parsePatch();
           // $params=array_values($_DELETE);    
            $params=$_PATCH; 
          }
  
             
          if(isset($_FILES)){
            $params["file"]=$_FILES;
           }

           $obj_params=json_decode(json_encode($params),FALSE);
           $obj_file=json_decode(json_encode($_FILES),FALSE);

           if(isset($id)){
             $res= call_user_func_array(array($obj,$method),[$id,$obj_params,$obj_file]);
             if(isset($res)){
                echo $res;
             }
            }else{
             $res= call_user_func_array(array($obj,$method),[$obj_params,$obj_file]);
             if(isset($res)){
                echo $res;
             }
            }
          

       }else{
         //echo "Method $method is not exists";       
         if(isset($_FILES)){          
          $params["file"]=$_FILES;
         }
         $obj_params=json_decode(json_encode($params),FALSE);
         $obj_file=json_decode(json_encode($_FILES),FALSE);
         call_user_func_array(array($obj,"index"),[$obj_params,$obj_file]);
       } 
        
  
    }else{
       echo $class." class not exits.";
    }
      
  
  
}else{
    echo "Default Class";
}
