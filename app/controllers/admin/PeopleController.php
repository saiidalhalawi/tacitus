<?php

/**
 * 管理機能 人物コントローラ
 *
 */
class PeopleController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/people
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages.admin.people.index');
	}

	/**
	 * Display a listing of the resource.
	 * ANY /admin/people/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.admin.people.create');
	}
}