<?php
  require_once("configs/db.config.php");
  //$base_url="cpanel";
  //require_once("library/classes/system_log.class.php");
  
  if(isset($_POST["SignIn"])){
    
     $username=trim($_POST["username"]);
     $password=trim($_POST["password"]);
     //echo $username," ",$password;
     //$result=$db->query("select u.id,u.username,r.name from {$tx}users u,{$tx}roles r where r.id=u.role_id and u.username='$username' and u.password='$password'");
     $result=$db->query("select u.id,u.full_name,u.password,u.email,u.photo,u.mobile,u.role_id,r.name role from {$tx}users u,{$tx}roles r where r.id=u.role_id and u.name='$username' and u.inactive=0");
      
         
      $user=$result->fetch_object();

      if($user && password_verify($password,$user->password)){
        
        $_SESSION["uid"]=$user->id;
        $_SESSION["uname"]=$user->full_name;
        $_SESSION["uphoto"]=$user->photo;
        $_SESSION["email"]=$user->email;
        $_SESSION["mobile"]=$user->mobile; 
        $_SESSION["role_id"]=$user->role_id;
        $_SESSION["urole"]=$user->role;
        header("location:home");
      }else{
        echo "Incorrect username or password";
      }
        
                
         //  $now=date("Y-m-d H:i:s");
        //  $log=new System_log("","LOGIN","Successfully logged in user : $uid-$_username",$now);
        //  $log->save();

               
  
    }

?>