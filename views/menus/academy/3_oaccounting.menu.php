<?php
	echo Menu::item([
		"id"=>"Account",
		"name"=>"Payment Management",
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"schooladmin"=>"fas fa-money-check-alt",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#Account",
		"links"=>[
			["route"=>"moneyreceipt/create","text"=>"Create MoneyReceipt",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"deskapp"=>"nav-icon fa fa-wrench"
			])],
			["route"=>"moneyreceipt","text"=>"Manage MoneyReceipt",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
				"staradmin"=>"menu-icon mdi mdi-table",
				"intellect"=>"fas fa-question-circle",
				"deskapp"=>"nav-icon fa fa-wrench"
			])],
		]
	]);
