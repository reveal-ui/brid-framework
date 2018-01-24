<?php

use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;
use Brotzka\DotenvEditor\DotenvEditor;


if (!function_exists('countStories')) {
    function countStories()
    {
        return 10;
    }
}

if(!function_exists('countUsers')){
	function countUsers()
	{
		return App\User::count();
	}
}

if (!function_exists('errorLogs')) {
    function errorLogs()
    {
        return app(LaravelLogViewer::class);
    }
}

if (!function_exists('envSettings')) {
    function envSettings()
    {
        return app(DotenvEditor::class);
    }
}
