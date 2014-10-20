<?php

class Person extends \BaseModel {
	protected $fillable = [];

	public function person_types(){
		return $this->hasMany('PersonType');
	}
}