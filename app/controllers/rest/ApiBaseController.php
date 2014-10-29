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
    protected function renderResponse($result, $code = null){

        return Response::json(array('code' => $code, 'result' => $result));
    }
}
