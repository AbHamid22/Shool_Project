<?php

//CONFIGS
$folder="../configs";
foreach (glob("{$folder}/*.config.php") as $filename)
{
    require_once $filename;
}


header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");


//require_once("../models/model.php");

//include all helpers
foreach (glob("../helpers/*.helper.php") as $filename)
{
    include $filename;
}

//include all models
$modelRootDir="../models";
foreach (glob($modelRootDir."/*.model.php") as $filename)
{
    require_once $filename;
}


$model_dirs = glob($modelRootDir.'/*' , GLOB_ONLYDIR);
foreach($model_dirs as $dir){
    foreach (glob("{$dir}/*.model.php") as $filename)
    {   
        include_once $filename;
    }
}

//include apis

$folder="../api";
$directories = glob($folder.'/*' , GLOB_ONLYDIR);
foreach($directories as $dir){
    foreach (glob("{$dir}/*.api.php") as $filename)
    {   
        include_once $filename;
    }
}

foreach (glob("{$folder}/*.api.php") as $filename)
{   
    include_once $filename;
}


//include all models
$libraryRootDir="../libraries";
foreach (glob($libraryRootDir."/*.library.php") as $filename)
{
    require_once $filename;
}


//----------Object Oriented API---------//

require_once("route.php");


abstract class Api{

    public $name;
    public function __construct(){
        $this->name=get_class($this);  
       // echo $this->name;      
	}

    function get_header_token(){
        $token = "";
        $headers = apache_request_headers();

        if (isset($headers['Authorization'])) {
            $authorizationHeader = $headers['Authorization'];
            $matches = array();
            if (preg_match('/Bearer (.+)/', $authorizationHeader, $matches)) {
                if (isset($matches[1])) {
                    $token = $matches[1];
                }
            }
        }
        return $token;
    }

    function authenticated(){
      $token=$this->get_header_token();
     
      $jwt=new JWT();
        if($jwt->is_valid($token)){
            return true;
        }else{
            return false;
        }
    }

    function authorized(){
        $token=$this->get_header_token();
       
        $jwt=new JWT();
          if($jwt->is_valid($token)){
              return true;
          }else{
            
              return false;
          }
      }
}

abstract class Model{
    public $name;
    public function __construct(){
        $this->name=get_class($this);        
	}
}