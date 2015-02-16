<?php

class PageController extends BaseController {

	public function index()
	{
		return View::make('page.index');
	}

	public function about()
	{
		return View::make('page.about');
	}

    public function contact()
	{
		return View::make('page.contact');
	}

}
