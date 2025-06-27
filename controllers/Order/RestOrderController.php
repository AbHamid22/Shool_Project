<?php
class RestOrderController extends Controller{
	public function __construct(){
         $this->module="Restaurant";
	}
    public function index(){
		$this->view();
	}

    public function create($id){	  
		$this->view($id);
    }

	public function tables(){
		$this->view();
	}
}