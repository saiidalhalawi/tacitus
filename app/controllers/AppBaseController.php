<?php

/**
 * アプリケーションベースコントローラ
 * 画面アクションの基底処理を行う
 *
 *
 * @author k.kanno
 *
 */
class AppBaseController extends BaseController
{

    public $layout = 'ancestors.base';

    public $lang = 'en';

    /**
     *  constructer
     */
    public function __construct(){
    	// 言語設定
    	if(Input::has('lang')){
    		if(strcmp(Input::get('lang'), 'ja') === 0){
    			$this->lang = 'ja';
    		}else{
    			$this->lang = 'en';
    		}
    		setcookie( 'lang', $this->lang, null, '/');
    	}else if(isset($_COOKIE['lang'])){
    		$this->lang = $_COOKIE['lang'];
    	}    	
    	View::share('lang', $this->lang);
    }
}
