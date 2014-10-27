<?php

/**
 * 
 * 人物検索
 *
 * @author m.tadanawa
 *
 */
class SearchPeopleController extends \ApiBaseController
{
    /**
     * Search people.
     *
     * @return Response people
     */    
	public function searchPeople($lang){

		$people=Person::where('birth_year','<=',Input::get('to'))
		->leftJoin('person_types', 'people.id', '=', 'person_types.perspon_id')
		->where('death_year','>=',Input::get('from'))
		->get();
		return Response::json($people);
	}

    /**
     *
     * @return Response
     */
    protected function renderResponse($result, $code = null){

        return Response::json(array('code' => $code, 'result' => $result));
    }
}
