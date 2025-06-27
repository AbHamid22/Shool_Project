<?php
	echo Menu::item([
		"id"=>"AcademyTeacher",
		"name"=>"Teacher Management",
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"schooladmin"=>"fas fa-user-tie",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#AcademyTeacher",
		"links"=>[
			["route"=>"academyteacher/create","text"=>"New Teacher Regi.",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"deskapp"=>"nav-icon fa fa-wrench"
			])],
			["route"=>"academyteacher","text"=>"Manage Teacher",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
				"staradmin"=>"menu-icon mdi mdi-table",
				"intellect"=>"fas fa-question-circle",
				"deskapp"=>"nav-icon fa fa-wrench"
			])],
		]
	]);
