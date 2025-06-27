<?php session_start();

require_once("configs/app.config.php");
  

 unset($_SESSION["uid"]);
 unset($_SESSION["uname"]);
 unset($_SESSION["uphoto"]);
 unset($_SESSION["email"]);
 unset($_SESSION["mobile"]);
 unset($_SESSION["role_id"]);
 unset($_SESSION["urole"]);


 session_destroy();
 
 header("location:$base_url");
?>