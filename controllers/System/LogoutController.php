<?php 
class LogoutController extends Controller{

    public function __construct(){
        global $base_url;
        unset($_SESSION["uid"]);
        unset($_SESSION["uname"]);
        unset($_SESSION["uphoto"]);
        unset($_SESSION["email"]);
        unset($_SESSION["mobile"]);
        unset($_SESSION["role_id"]);
        unset($_SESSION["urole"]);       
       
        session_destroy();
        header("location:$base_url");
       
        //echo "<h1>Hello</h1>";
       // echo "<script>window.location.href='$base_url'</script>";
	}

	public function index(){
           echo "<script>window.location.href='$base_url'</script>";
	}

}