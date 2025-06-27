<?php
	echo Menu::item([
		"id"=>"AcademyStudent",
		"name"=>"Student Registration",
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"schooladmin"=>"fas fa-user-graduate",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#AcademyStudent",
		"links"=>[
		

		
			// ["route"=>"customer/create","text"=>"Create New Student",
			// "icon"=>iconClass([
			// 	"adminlte"=>"nav-icon fa fa-wrench",
			// "staradmin"=>"menu-icon mdi mdi-table",
			// "intellect"=>"fas fa-question-circle",
			// "deskapp"=>"nav-icon fa fa-wrench"
			// ])],
			// ["route"=>"customer","text"=>"Manage New Student",
			// "icon"=>iconClass([
			// 	"adminlte"=>"nav-icon fa fa-wrench",
			// 	"staradmin"=>"menu-icon mdi mdi-table",
			// 	"intellect"=>"fas fa-question-circle",
			// 	"deskapp"=>"nav-icon fa fa-wrench"
			// ])],

			["route"=>"academystudent/create","text"=>"Create New Student",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"deskapp"=>"nav-icon fa fa-wrench"
			])],
			["route"=>"academystudent","text"=>"Manage New Student",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
				"staradmin"=>"menu-icon mdi mdi-table",
				"intellect"=>"fas fa-question-circle",
				"deskapp"=>"nav-icon fa fa-wrench"
			])],
		
		]
	]);
