<?php
	echo Menu::item([
		"id"=>"order",
		"name"=>"Order",		
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
		    "staradmin"=>"mdi mdi-grid-large menu-icon",
			"intellect"=>"fas fa-palette",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#order",
		"links"=>[
			["route"=>"order/create",
			"text"=>"Create Order",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
			["route"=>"order",
			"text"=>"Manage Order",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
		]
	]);
