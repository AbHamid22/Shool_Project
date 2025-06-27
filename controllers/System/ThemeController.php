<?php 
class ThemeController extends Controller{

    public function __construct(){
      $this->module="System";
    }

    public function ChangeTheme(){
        $this->view();
    }
}