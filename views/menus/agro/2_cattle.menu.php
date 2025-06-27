<?php
	echo Menu::item([
		"id"=>"cattle",
		"name"=>"Cattle",			
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
		    "staradmin"=>"menu-icon mdi mdi-card-text-outline",
			"intellect"=>"fas fa-file-alt",
			"deskapp"=>"micon bi bi-table"
		]),
		"route"=>"#cattle",
		"links"=>[
			["route"=>"cattle/create",
			"text"=>"Create Cattle",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
			["route"=>"cattle",
			"text"=>"Manage Cattle",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
			])],
		]
	]);
