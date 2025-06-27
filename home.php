<?php require_once("core.php"); 

if(!isset($_SESSION["uid"])) header("location:$base_url");
   $uid=$_SESSION["uid"]; 
?>

<?php section("master.php"); ?>
 

 
