<?php  
  function view($path="",$data=NULL){    
    global $base_url;
    global $template;
    global $app_name;
    global $logo;
    global $version;

     if(isset($_GET["method"])){
        if($_GET["method"]!=""){
            $method=$_GET["method"];
        }else{
            $method="index";
        }
       
     }
    
     $vars=get_defined_vars();

     $class=isset($_GET["class"])?$_GET["class"]:"home";
     $id=isset($_GET["id"])?$_GET["id"]:"";
     //${strtolower($class)} = (object) $data;
      //$bag=$data; 
      //dynamic objectVariable=$object from array;    
      ${strtolower($class)}= json_decode(json_encode($data),FALSE);
      
    if(isset($path)){        
        include_once("views/pages/$path/$class/$method.php");
    }else{
        include_once("views/pages/$class/$method.php");
    }
     
  }

  function views($path=""){
    global $base_url;
    global $template;
    global $app_name;
    global $logo;
    global $version;
    if(isset($path)){ 

        if(file_exists("views/$path")){      
         include_once("views/$path");
        }else{
        // include("views/404.php");
        }

    }else{
      //include("views/404.php");
    }
  }
  function menus(){
    global $base_url;
    global $template;    
    global $app_name;
    global $logo;
    global $version;
    global $sector;
              $folder="views/menus";

              //include "{$folder}/table_menu.php";

                
              if(file_exists("{$folder}/dashboard.menu.php")){
                include "{$folder}/dashboard.menu.php";
              }

              foreach (glob("{$folder}/$sector/*.menu.php") as $filename)
              {
                if("{$folder}/dashboard.menu.php"==$filename)continue;
                  include $filename;
              }   
              
              foreach (glob("{$folder}/*.menu.php") as $filename)
              {
                if("{$folder}/dashboard.menu.php"==$filename)continue;
                  include $filename;
              }      
          
  }

  function section($path=""){
    global $app_name;
    global $base_url;
    global $template;
    global $logo;
    global $version;
    if(isset($path)){ 

        if(file_exists("views/layouts/$template/$path")){      
         include_once("views/layouts/$template/$path");
        }else{
        // include("views/404.php");
        }

    }else{
      //include("views/404.php");
    }
  }

  function redirect($method="index",$message=""){   
    
     $class=isset($_GET["class"])?$_GET["class"]:"home";
     global $base_url;
   // header("location:$class/$method");
    if(isset($method)){
        echo "<script>window.location='$base_url/$class'</script>";
    }else{
        echo "<script>window.location='$base_url/$class/$method'</script>";
    }
    

  }



?>