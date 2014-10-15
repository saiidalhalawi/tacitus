<?php

/**
 * 管理機能 人物コントローラ
 *
 */
class PeopleController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 * GET /board
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages.admin.people.index');
	}
}