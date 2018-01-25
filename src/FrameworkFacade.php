<?php

namespace Reveal\Framework;

use Illuminate\Support\Facades\Facade;


class FrameworkFacade extends Facade
{

	protected static function getFacadeAccessor()
	{

		return "Framework";

	}

}
