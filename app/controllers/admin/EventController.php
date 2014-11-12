<?php

/**
 * 管理機能 事件コントローラ
 *
 */
class EventController extends \AdminBaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/people
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = HistoricalEvent::paginate(15);
		return View::make('pages.admin.event.index') -> with('events',$events);
	}

	/**
	 * Display a listing of the resource.
	 * GET /admin/people/create
	 *
	 * @return Response
	 */
	public function create()
	{
 		return View::make('pages.admin.event.create');
	}

    /**
     * Store a newly created resource in storage.
     * POST /admin/people
     *
     * @return Response
     */
	public function store(){
        // people
        $event = new HistoricalEvent;
        $event->name_en = Input::get('name_en');
        $event->name_jp = Input::get('name_jp');
        $event->birth_year = Input::get('birth_year');
        $event->death_year = Input::get('death_year');
        $event->explanation_en = Input::get('explanation_en');
        $event->explanation_jp = Input::get('explanation_jp');
        $event->save();

         //redirect
         Session::flash('message','Success create.');
         return Redirect::to('/admin/event');

	}

    /**
     * Show the form for editing the specified resource.
     * GET /admin/people/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
	public function edit($id){
		$event = HistoricalEvent::find($id);
		return View::make('pages.admin.event.edit')->with('event',$event);
	}

    /**
     * Update the specified resource in storage.
     * PUT /admin/people/{id}
     *
     * @param  int  $id
     * @return Response
     */
	public function update($id){
		$event = HistoricalEvent::find($id);
        $event->name_en = Input::get('name_en');
        $event->name_jp = Input::get('name_jp');
        $event->birth_year = Input::get('birth_year');
        $event->death_year = Input::get('death_year');
        $event->title_en = Input::get('title_en');
        $event->title_jp = Input::get('title_jp');
        $event->explanation_en = Input::get('explanation_en');
        $event->explanation_jp = Input::get('explanation_jp');
        $event->save();

        //redirect
        Session::flash('message','Success Update.');
        return Redirect::to('/admin/event');
	}
}