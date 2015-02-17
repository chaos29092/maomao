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

    public function service()
	{
		return View::make('page.service');
	}

    public function colorDevice()
	{
		return View::make('products.color_device');
	}

    public function nocolorDevice()
	{
		return View::make('products.nocolor_device');
	}

}
