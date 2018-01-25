<?php

namespace Reveal\Framework\Controllers\Admin;

use Illuminate\Routing\Controller;


class OptionsController extends Controller
{
	public function index()
	{
		$options = envSettings()->getContent();

		return view("framework::admin.options", compact('options'));
	}
}
