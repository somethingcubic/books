<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class BrandController extends Controller
{
    public function __construct($id, $module, array $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->layout = 'main';
    }

    public function actionInfo()
    {
        return $this->render('info');
    }

    public function actionSet()
    {
        return $this->render('set');
    }

    public function actionImages()
    {
        return $this->render('images');
    }
}