<?php

namespace app\common\components;

use Yii;
use yii\web\Controller;
use yii\web\Cookie;

/**
 * Class BaseWebController
 * @package app\common\components
 * 集成常用公共方法
 */
class BaseWebController extends Controller
{
    public $enableCsrfValidation = false;

    public function get($key = null, $default_val = '')
    {
        return Yii::$app->request->get($key, $default_val);
    }

    public function post($key = null, $default_val = '')
    {
        return Yii::$app->request->post($key, $default_val);
    }

    public function setCookie($name, $value, $expire = 3600)
    {
        $cookie = Yii::$app->response->cookies;
        $cookie->add(new Cookie([
            'name' => $name,
            'value' => $value,
            'expire' => $expire
        ]));
    }

    public function getCookie($name, $default_val = '')
    {
        $cookie = Yii::$app->request->cookies;
        return $cookie->getValue($name, $default_val);
    }

    public function removeCookie($name)
    {
        $cookie = Yii::$app->response->cookies;
        $cookie->remove($name);
    }

    public function renderJson($data = [], $msg = 'ok', $code = 200)
    {
        header('Content-type: application/json');
        echo json_encode([
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
            'req_id' => uniqid()
        ]);
    }
}