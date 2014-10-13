<?php

class BaseModel extends \Eloquent {

	protected $rules;

	/**
	*  validate inputs
	*
	* @param array inputs
	* @return Validator object with result
	*/
	public function validate($data){
        // make a new validator object
        $v = Validator::make($data, $this->rules);
        // return the result
        return $v;
    }

    /**
    *  find a record by the certain column
    *
    */
    public static function findBy($col = 'id', $val){
    	return self::where($col , '=', $val)->first();
    }
}
