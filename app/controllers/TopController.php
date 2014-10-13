<?php

class TopController extends \AppBaseController {

	/**
	 * Display a listing of the resource.
	 * GET /top
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages.index');
	}
}