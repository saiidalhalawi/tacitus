<?php

class State extends BaseModel {

	protected $table = 'states';

	protected $fillable = [];

	/**
	 * すべての国名を取得
	 *
	 */
	public function retrieveWholeStateNames($takeJapanese = false){

		$lang = ($takeJapanese)? 'name_ja' : 'name_en';
		return DB::table('states')->select('id', $lang)->get();
	}

}