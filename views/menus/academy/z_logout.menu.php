<?php
	echo Menu::item([
    "id"=>"logout",
		"name"=>"Logout",	
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
		    "staradmin"=>"menu-icon mdi mdi-layers-outline",
			"intellect"=>"nav-icon fa fa-wrench",
			"schooladmin"=>"fas-fa-logout"
		]),
		"route"=>"$base_url/logout.php"
	]);
