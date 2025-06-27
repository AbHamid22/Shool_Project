<?php
class OrderController extends Controller{
	public function __construct(){
         $this->module="Sales";
	}
    public function index(){
		$this->view();
	}

    public function create(){
		$this->view();
    }

	public function show($id){	 
	 $this->view(Order::find($id));

	}
}