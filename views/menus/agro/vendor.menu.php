<?php
	echo Menu::item([
		"id"=>"vendor",
		"name"=>"Vendor",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#vendor",
		"links"=>[
			["route"=>"vendor/create","text"=>"Create Vendor","icon"=>"far fa-circle nav-icon"],
			["route"=>"vendor","text"=>"Manage Vendor","icon"=>"far fa-circle nav-icon"],
		]
	]);
