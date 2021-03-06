<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class FinanceController extends Controller
{
    public function __construct($id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAccount()
    {
        return $this->render('account');
    }

    public function actionPay_info()
    {
        return $this->render('pay_info');
    }
}