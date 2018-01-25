<?php

namespace Reveal\Framework\Controllers\Admin;

use Illuminate\Routing\Controller;


class SettingsController extends Controller
{

	public function index(){
		return view("framework::admin.settings");
	}

}
