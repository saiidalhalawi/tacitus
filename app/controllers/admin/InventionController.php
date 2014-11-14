<?php

/**
 * 管理機能 発明コントローラ
 *
 */
class InventionController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/people
	 *
	 * @return Response
	 */
	public function index()
	{
		$inventions = Invention::paginate(15);
		return View::make('pages.admin.invention.index')
                    ->with('invention', $invention);
	}

	/**
	 * Display a listing of the resource.
	 * GET /admin/people/create
	 *
	 * @return Response
	 */
	public function create()
	{
 		return View::make('pages.admin.invention.create');
	}

    /**
     * Store a newly created resource in storage.
     * POST /admin/people
     *
     * @return Response
     */
	public function store(){
        // people
        $invention = new Invention;
        $invention->name_en = Input::get('name_en');
        $invention->name_jp = Input::get('name_jp');
        $invention->occured_year = Input::get('birth_year');
        $invention->is_occured_year_fixed = Input::get('is_occured_year_fixed');
        $invention->state_id = Input::get('state_id');
        $invention->explanation_en = Input::get('explanation_en');
        $invention->explanation_jp = Input::get('explanation_jp');
        $invention->save();

         //redirect
         Session::flash('message','Success create.');
         return Redirect::to('/admin/invention');
	}

    /**
     * Show the form for editing the specified resource.
     * GET /admin/people/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
	public function edit($id){
		$invention = Invention::find($id);
		return View::make('pages.admin.invention.edit')->with('invention',$invention);
	}

    /**
     * Update the specified resource in storage.
     * PUT /admin/people/{id}
     *
     * @param  int  $id
     * @return Response
     */
	public function update($id){
		$invention = Invention::find($id);
        $invention->name_en = Input::get('name_en');
        $invention->name_jp = Input::get('name_jp');
        $invention->occured_year = Input::get('birth_year');
        $invention->is_occured_year_fixed = Input::get('is_occured_year_fixed');
        $invention->state_id = Input::get('state_id');
        $invention->explanation_en = Input::get('explanation_en');
        $invention->explanation_jp = Input::get('explanation_jp');
        $invention->save();

        //redirect
        Session::flash('message','Success Update.');
        return Redirect::to('/admin/invention');
	}
}