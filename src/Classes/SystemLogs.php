<?php

namespace Reveal\Framework\Classes;

use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;

class SystemLogs
{

	protected $logs;

    public function __construct(LaravelLogViewer $logviewer){
		$this->logs = $logviewer;
	}

	public function getLogs()
	{
		return collect($this->logs->all())->take(30)->all();
	}


}
