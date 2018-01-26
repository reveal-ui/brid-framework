<?php

namespace Reveal\Framework\Controllers\Admin;

use ShawnSandy\Backstory\App\Controllers\StoryController;
use ShawnSandy\Backstory\App\Story;
use ShawnSandy\Backstory\App\StoryCategory;

class ContentController extends StoryController
{
	protected $recent;

	public function __construct(){

		$this->recent = Story::latest()->take(10)->get();

	}

	public function index()
	{

		$content = backstory()->latestStories();
		$recent = $this->recent;
		$categories = StoryCategory::all();

		return view("framework::admin.content", compact('content', 'recent', 'categories'));

	}

	public function create()
	{
		$recent = $this->recent;
		return view("framework::admin.create-content", compact('recent'));
	}

	public function edit($id)
	{

		$recent = $this->recent;

		$model = Story::with(['author', 'categories'])->where("id", $id)->first();

		return view('framework::admin.edit-content', compact('model', 'recent'));

	}



}
