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

        // validate
        $validate = Validator::make(Input::get(),Config::get('rules.search_rules'));
        if($validate->fails()){
            return $this->renderResponse(Config::get('api.response_code.PARAM_ERROR'));
        }
        // where
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
        $colmn_lang = $lang;
        if($lang == 'ja'){
            $colmn_lang = 'jp';
        }
        // select
        $pepole = $people->select('people.id')
        ->addSelect('name_'.$colmn_lang.' as name')
        ->addSelect('birth_year')
        ->addSelect('is_birth_year_fixed')
        ->addSelect('death_year')
        ->addSelect('is_death_year_fixed')
        ->addSelect('state_id')
        ->addSelect('explanation_'.$colmn_lang.' as explanation')
        ->addSelect('title_'.$colmn_lang.' as title');
        $ret = $people->get();

        return $this->renderResponse($ret);
	}
}
