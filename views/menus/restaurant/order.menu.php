<?php
  $arr=[
		"id"=>"restorder",
		"name"=>"Order",		
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
		    "staradmin"=>"menu-icon mdi mdi-floor-plan",
			"intellect"=>"fas fa-calendar-alt",
			"deskapp"=>"nav-icon fa fa-wrench",
			"edumin"=>"nav-icon fa fa-wrench",
		]),
		"route"=>"#restorder",
		"links"=>[
			["route"=>"restorder/create",
			"text"=>"Create Order",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
				"edumin"=>"nav-icon fa fa-wrench",
			])],
			["route"=>"restorder",
			"text"=>"Manage Booking",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
				"edumin"=>"nav-icon fa fa-wrench",
			])],
			["route"=>"restorder/tables",
			"text"=>"Show Tables",
			"icon"=>iconClass([
				"adminlte"=>"far fa-circle nav-icon",
				"deskapp"=>"far fa-circle nav-icon",
				"intellect"=>"far fa-circle nav-icon",
				"edumin"=>"nav-icon fa fa-wrench",
			])],
		]
	];

	echo Menu::item($arr);

