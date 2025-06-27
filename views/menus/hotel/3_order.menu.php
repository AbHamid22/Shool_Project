<?php
	echo Menu::item([
		"id"=>"order",
		"name"=>"Payment Management",		
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
		    "staradmin"=>"mdi mdi-grid-large menu-icon",
			"intellect"=>"fas fa-palette",
			"schooladmin"=>"fas fa-money-check-alt",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#order",
		"links"=>[
			["route"=>"order/create",
			"text"=>"Create Payment",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
			["route"=>"order",
			"text"=>"Manage Payment",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
		]
	]);
