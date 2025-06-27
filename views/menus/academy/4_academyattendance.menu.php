<?php
	echo Menu::item([
		"id"=>"AcademyAttendance",
		"name"=>"Attendance Management",
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"schooladmin"=>"fas fa-user-edit",
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#AcademyAttendance",
		"links"=>[
			["route"=>"academyattendance/create","text"=>"Create Attendance",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"deskapp"=>"nav-icon fa fa-wrench"
			])],
			["route"=>"academyattendance","text"=>"Manage Attendance",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
				"staradmin"=>"menu-icon mdi mdi-table",
				"intellect"=>"fas fa-question-circle",
				"deskapp"=>"nav-icon fa fa-wrench"
			])],
		]
	]);
