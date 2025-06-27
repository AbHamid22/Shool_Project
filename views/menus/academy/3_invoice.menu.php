<?php
	echo Menu::item([
		"id"=>"Invoice",
		"name"=>"Invoice Management",
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"schooladmin"=>"fas fa-money-bill-alt",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#Invoice",
		"links"=>[
			["route"=>"invoice/create","text"=>"Create School Invoice",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"deskapp"=>"nav-icon fa fa-wrench"
			])],
			["route"=>"invoice","text"=>"Manage School Invoice",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
				"staradmin"=>"menu-icon mdi mdi-table",
				"intellect"=>"fas fa-question-circle",
				"deskapp"=>"nav-icon fa fa-wrench"
			])],
			["route"=>"invoicedetail","text"=>"School Invoice details",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
				"staradmin"=>"menu-icon mdi mdi-table",
				"intellect"=>"fas fa-question-circle",
				"deskapp"=>"nav-icon fa fa-wrench"
			])],
		]
	]);
