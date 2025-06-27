<?php
	echo Menu::item([
		"id"=>"AcademySubject",
		"name"=>"Subject Management",
		"icon"=>iconClass([
			"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
            "schooladmin"=>"fas fa-book-reader",
			
			"deskapp"=>"nav-icon fa fa-wrench"
		]),
		"route"=>"#AcademySubject",
		"links"=>[
			["route"=>"academysubject/create","text"=>"Create Subject",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
			"staradmin"=>"menu-icon mdi mdi-table",
			"intellect"=>"fas fa-question-circle",
			"deskapp"=>"nav-icon fa fa-wrench"
			])],
			["route"=>"academysubject","text"=>"Manage Subject",
			"icon"=>iconClass([
				"adminlte"=>"nav-icon fa fa-wrench",
				"staradmin"=>"menu-icon mdi mdi-table",
				"intellect"=>"fas fa-question-circle",
				"deskapp"=>"nav-icon fa fa-wrench"
			])],
		]
	]);
