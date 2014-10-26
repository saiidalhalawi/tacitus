<?php

/**
 * アプリケーションベースコントローラ
 * 画面アクションの基底処理を行う
 *
 *
 * @author k.kanno
 *
 */
class ApiBaseController extends BaseController
{

    /**
     *
     * @return Response
     */
    public function renderResponse(){
    	$from = Input::get('from');
    	$to = Input::get('to');
    	// From　Toのどちらかが始端終端に該当すれば返す.
    	$people = Person::leftJoin('person_types','people.id','=','person_types.perspon_id')
    		->whereRaw('('.$from.' between birth_year and death_year or '
    			. $to.' between birth_year and death_year )')->get();
    	return Response::json($people);
    }
}
