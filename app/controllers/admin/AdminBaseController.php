<?php

/**
 * アプリケーションベースコントローラ
 * 画面アクションの基底処理を行う
 *
 *
 * @author k.kanno
 *
 */
class AdminBaseController extends BaseController
{

    public $layout = 'ancestors.admin.base';

    public function __construct(){
        if(App::environment('production')){
        	// 本番アクセス禁止
        	return Redirect::intended("/");
        }
    }
}
