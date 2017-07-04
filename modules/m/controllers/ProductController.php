<?php
namespace app\modules\m\controllers;

use yii\web\Controller;

class ProductController extends Controller
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

    public function actionInfo()
    {
        $this->layout = "product";
        return $this->render('info');
    }

    public function actionOrder()
    {
        return $this->render('order');
    }

}