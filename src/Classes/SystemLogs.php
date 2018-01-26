<?php

namespace Reveal\Framework\Classes;

use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;

class SystemLogs
{

	protected $logs;
	protected $collection;

    public function __construct(LaravelLogViewer $logviewer){
		$this->logs = $logviewer;
		$this->collection = collect($this->logs->all());
	}

	public function getLogs()
	{
		$collection = $this->collection->take(30)
		->all();
		return $collection;
	}

}
