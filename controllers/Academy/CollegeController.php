<?php
class CollegeController extends Controller{

    function __construct(){
      $this->module="Academy";
    }

    function index(){
        $this->view();
    }

    function create(){
       view("Academy");
    }

    function save($data,$file){
      print_r($data);
    }

}

?>