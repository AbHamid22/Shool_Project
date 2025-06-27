<?php
	echo Menu::item([
		"id"=>"delivery",
		"name"=>"Delivery",		
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
		    "staradmin"=>"mdi mdi-grid-large menu-icon",
			"intellect"=>"fas fa-palette",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#delivery",
		"links"=>[
			["route"=>"delivery/create",
			"text"=>"Create Delivery",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
			["route"=>"delivery",
			"text"=>"Manage Delivery",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
		]
	]);
