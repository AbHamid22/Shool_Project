<?php session_start();
//CONFIGS
$folder="configs";
foreach (glob("{$folder}/*.config.php") as $filename)
{
    include $filename;
}

?>

<?php
//CONTROLLERS

//----Controller
abstract class Controller{
    public $module;
    public $name;
    public function __construct(){
        $this->name=get_class($this);
	}
    public function view($data=NULL){
        global $base_url;

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
         ${strtolower($class)}= json_decode(json_encode($data),FALSE);
         
       if(isset($this->module)){        
           include_once("views/pages/$this->module/$class/$method.php");
       }else{
           include_once("views/pages/$class/$method.php");
       }
    }
}



$folder="controllers";

$directories = glob($folder.'/*' , GLOB_ONLYDIR);

foreach($directories as $dir){
    foreach (glob("{$dir}/*Controller.php") as $filename)
    {   
        include_once $filename;
    }
}

foreach (glob("{$folder}/*Controller.php") as $filename)
{   
    include_once $filename;
}


?>

<?php
//HELPERS
 $folder="helpers";
 foreach (glob("{$folder}/*.helper.php") as $filename)
 {
     include $filename;
 }
?>

<?php
//LIBRARIES
 $folder="libraries";
 foreach (glob("{$folder}/*.library.php") as $filename)
 {
     require_once $filename;
 }
?>


<?php
//MODELS
//--------------Model-----------------------//
abstract class Model{
    public $name;
    public function __construct(){
        $this->name=get_class($this);        
	}
}

$folder="models";
foreach (glob("{$folder}/*.model.php") as $filename)
{
    require_once $filename;
}

$directories = glob($folder.'/*' , GLOB_ONLYDIR);
foreach($directories as $dir){
    foreach (glob("{$dir}/*.model.php") as $filename)
    {   
        include_once $filename;
    }
}




?>

