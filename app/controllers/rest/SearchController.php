<?php

/**
 * 
 * 検索API
 *
 * @author m.tadanawa
 *
 */
class SearchController extends \ApiBaseController
{

    private static $DEFAULT_ITEM_COUNT = 100;

    /**
     * Search people.
     *
     * @return Response people
     */    
	public function people($lang){

		$people=Person::where('birth_year','<=',Input::get('to'))
    		->leftJoin('person_types', 'people.id', '=', 'person_types.perspon_id')
	       	->where('death_year','>=',Input::get('from'));

        if(Input::has('type') && is_numeric(Input::get('type'))){
            $people = $people->where('person_types.id','=',Input::get('type'));
        }

        if(Input::has('region_id') && is_numeric(Input::get('region_id'))){
            $people = $people->where('region_id','=',Input::get('region_id'));
        }
        
		$people = $people->orderBy('people.id');

        $limit = Input::get('limit', self::$DEFAULT_ITEM_COUNT);
        if(is_numeric($limit)){
            $people = $people->take($limit);
        }
        $ret = $people->get();

        return $this->renderResponse($ret);
	}
}
