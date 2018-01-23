<?php

use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;


if(!function_exists("countStories"))
{

	function countStories(){
		return 10;
	}

}

if(function_exists('errorLogs'))
{
	function errorLogs() {
		return app(LaravelLogViewer::class);
	}
}
