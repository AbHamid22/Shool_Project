<?php
class HomeController extends Controller{
    public function __construct(){
      $this->module="dashboard";
    }
    public function index(){     
       $this->view();
    }

    public function summary(){       
    
      $this->view();
   }

    
}

?>