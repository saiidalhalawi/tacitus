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
	       	->where('death_year','>=',Input::get('from'));

        if(Input::has('type') && is_numeric(Input::get('type'))){
            $people = $people->where('person_types.id','=',Input::get('type'));
        }

        if(Input::has('region_id') && is_numeric(Input::get('region_id'))){
            $people = $people->where('region_id','=',Input::get('region_id'));
        }
        
		$people = $people->orderBy('people.id')->get();

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
