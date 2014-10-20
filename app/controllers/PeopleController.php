<?php

class PeopleController extends \AppBaseController {

	/**
	*	create pason data.
	*/
	public function create(){
		if(Input::get('name_en')){
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
		}
		return View::make('pages.admin.people.create');
	}

}
