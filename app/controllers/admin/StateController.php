<?php

/**
 * 管理機能 国家コントローラ
 *
 */
class StateController extends \AdminBaseController {

    public function __construct(){
        View::share('REGIONS', Config::get('region.regions'));
    }

	/**
	 * Display a listing of the resource.
	 * GET /admin/people
	 *
	 * @return Response
	 */
	public function index()
	{
		$states = State::paginate(15);
		return View::make('pages.admin.state.index')->with('states',$states);
	}

	/**
	 * Display a listing of the resource.
	 * GET /admin/state/create
	 *
	 * @return Response
	 */
	public function create()
	{
 		return View::make('pages.admin.state.create');
	}

    /**
     * Store a newly created resource in storage.
     * POST /admin/state
     *
     * @return Response
     */
	public function store(){
        // state
        $state = new State;
        $state->name_en = Input::get('name_en');
        $state->name_jp = Input::get('name_jp');
        $state->region_id = Input::get('region_id');
        $state->rise_year = Input::get('rise_year');
        if(Input::has('is_rise_year_fixed')) $state->is_rise_year_fixed = true;
        $state->fall_year = Input::get('fall_year');
        if(Input::has('is_fall_year_fixed')) $state->is_fall_year_fixed = true;
        $state->explanation_en = Input::get('explanation_en');
        $state->explanation_jp = Input::get('explanation_jp');
        $state->capital_name_en = Input::get('capital_name_en');
        $state->capital_name_jp = Input::get('capital_name_jp');
        $state->save();

         //redirect
         Session::flash('message','Success create.');
         return Redirect::to('/admin/state');

	}

    /**
     * Show the form for editing the specified resource.
     * GET /admin/state/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
	public function edit($id){
		$state = State::find($id);
		return View::make('pages.admin.state.edit')->with('state',$state);
	}

    /**
     * Update the specified resource in storage.
     * PUT /admin/people/{id}
     *
     * @param  int  $id
     * @return Response
     */
	public function update($id){

		$state = State::find($id);
        $state->name_en = Input::get('name_en');
        $state->name_jp = Input::get('name_jp');
        $state->region_id = Input::get('region_id');
        $state->rise_year = Input::get('rise_year');
        if(Input::has('is_rise_year_fixed')) $state->is_rise_year_fixed = true;
        $state->fall_year = Input::get('fall_year');
        if(Input::has('is_fall_year_fixed')) $state->is_fall_year_fixed = true;
        $state->capital_name_en = Input::get('capital_name_en');
        $state->capital_name_jp = Input::get('capital_name_jp');
        $state->explanation_en = Input::get('explanation_en');
        $state->explanation_jp = Input::get('explanation_jp');
        $state->save();

        //redirect
        Session::flash('message','Success Update.');
        return Redirect::to('/admin/state');
	}
}