<?php
	echo Menu::item([
		"id"=>"Supplier",
		"name"=>"Supplier",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#Supplier",
		"links"=>[
			["route"=>"supplier/create","text"=>"Create Supplier","icon"=>"far fa-circle nav-icon"],
			["route"=>"supplier","text"=>"Manage Supplier","icon"=>"far fa-circle nav-icon"],
		]
	]);
