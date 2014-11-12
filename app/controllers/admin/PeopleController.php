<?php

/**
 * 管理機能 人物コントローラ
 *
 */
class PeopleController extends \AdminBaseController {

    public function __construct(){
        View::share('PERSON_TYPES', Config::get('person_type.types'));
    }

	/**
	 * Display a listing of the resource.
	 * GET /admin/people
	 *
	 * @return Response
	 */
	public function index()
	{	// get ll
		$people = Person::paginate(15);
		return View::make('pages.admin.people.index') -> with('people',$people);
	}

	/**
	 * Display a listing of the resource.
	 * GET /admin/people/create
	 *
	 * @return Response
	 */
	public function create()
	{
 		return View::make('pages.admin.people.create');
	}

    /**
     * Store a newly created resource in storage.
     * POST /admin/people
     *
     * @return Response
     */
	public function store(){
           // people
            $person = new Person;
            $person->name_en = Input::get('name_en');
            $person->name_jp = Input::get('name_jp');
            $person->birth_year = Input::get('birth_year');
            $person->death_year = Input::get('death_year');
            $person->title_en = Input::get('title_en');
            $person->title_jp = Input::get('title_jp');
            $person->explanation_en = Input::get('explanation_en');
            $person->explanation_jp = Input::get('explanation_jp');
            $person->save();

            // type
            if(Input::get('person_type_id')){
	            $person_type = new PersonType;
    	        $person_type->type_code = Input::get('person_type_id');
        	    $person_type = $person->person_types()->save($person_type);
            }

         //redirect
         Session::flash('message','Success create.');
         return Redirect::to('/admin/people');

	}

    /**
     * Show the form for editing the specified resource.
     * GET /admin/people/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
	public function edit($id){
		$person = Person::find($id);
		return View::make('pages.admin.people.edit')->with('person',$person);
	}

    /**
     * Update the specified resource in storage.
     * PUT /admin/people/{id}
     *
     * @param  int  $id
     * @return Response
     */
	public function update($id){
		$person = Person::find($id);
        $person->name_en = Input::get('name_en');
        $person->name_jp = Input::get('name_jp');
        $person->birth_year = Input::get('birth_year');
        $person->death_year = Input::get('death_year');
        $person->title_en = Input::get('title_en');
        $person->title_jp = Input::get('title_jp');
        $person->explanation_en = Input::get('explanation_en');
        $person->explanation_jp = Input::get('explanation_jp');
        $person->save();

        //redirect
        Session::flash('message','Success Update.');
        return Redirect::to('/admin/people');
	}
}