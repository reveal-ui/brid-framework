<?php

namespace Reveal\Framework\Controllers\Admin;

use Illuminate\Routing\Controller;
use Reveal\Framework\Classes\SystemLogs;


class LogsController  extends Controller
{

	protected $logs;

	public function __construct(SystemLogs $logs)
	{

		$this->logs = $logs;

	}

	public function index()
	{
		$logs = $this->logs->getLogs();
		$files = errorLogs()->getFiles();
		// dump($logs);
		return view("framework::admin.logs", compact("logs"));
	}
}
