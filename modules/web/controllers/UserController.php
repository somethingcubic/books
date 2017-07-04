<?php

namespace app\modules\web\controllers;

use app\common\components\BaseWebController;
use Yii;

class UserController extends BaseWebController
{
    public function __construct($id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
    }

    public function actionLogin()
    {
        //get请求时，页面展示
        if (Yii::$app->request->isGet){
            $this->layout = "user";
            return $this->render('login');
        }
        //登录逻辑处理
        //获取提交的账号密码
        //判断是否非空
        //获取账户信息
        //判断密码
        //写入cookie
    }

    public function actionEdit()
    {
        return $this->render('edit');
    }

    public function actionResetPwd()
    {
        return $this->render('reset_pwd');
    }
}