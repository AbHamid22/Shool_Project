<?php
	Menu::item([
		"id"=>"stock",
		"name"=>"Stock",		
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
		    "staradmin"=>"mdi mdi-grid-large menu-icon",
			"intellect"=>"fas fa-palette",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#stock",
		"links"=>[
			["route"=>"stock/create",
			"text"=>"Create Stock",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
            ["route"=>"stock",
			"text"=>"Manage Stock",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
            ["route"=>"stock/balance",
			"text"=>"Stock Balance",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])]
			
		]
	]);
