<?php

class PagesController extends \AppBaseController {

	/**
	 * Display a static page
	 * GET /top
	 *
	 * @return Response
	 */
	public function about()
	{
		return View::make('pages.about');
	}
}