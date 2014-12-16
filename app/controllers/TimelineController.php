<?php

class TimelineController extends \AppBaseController {

	/**
	 * Display a listing of the resource.
	 * GET /top
	 *
	 * @return Response
	 */
	public function index()
	{

		$keywords = array();
		if(Input::has('k')){
			$keywords = explode(' ', Input::get('k'));
		}

		$from = $to = 0;
		$numbers = $words = array();
		foreach($keywords as $keyword){
			if(is_numeric($keyword)){
				$numbers[] = $keyword;
			}else{
				$words[] = $keyword;
			}
		}
		if(!empty($numbers)){
			if(count($numbers) > 1){
				$from = $numbers[0];
				$to = $numbers[1];
			}else{
				$from = $numbers[0] - 100;
				$to = $numbers[0] + 100;
			}
		}

		// 国を取得
		$states = new State();

		return View::make('pages.timeline.index')
					->with('stateNames', $states->retrieveWholeStateNames())
					->with('from', $from)
					->with('to', $to)
					->with('words', implode(',', $words))
					->with('keywords', Input::get('k'));
	}
}