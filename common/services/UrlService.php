<?php
/**
 * Created by PhpStorm.
 * User: qiansenmiao
 * Date: 2017/6/30
 * Time: 下午2:47
 */

namespace app\common\services;


use yii\helpers\Url;

class UrlService
{
    public static function buildWebUrl($path, $params = [])
    {
        $path = Url::toRoute(array_merge([$path], $params));
        return \Yii::$app->params['domain']['web'] . $path;
    }

    public static function buildMUrl($path, $params = [])
    {
        $path = Url::toRoute(array_merge([$path], $params));
        return \Yii::$app->params['domain']['m'] . $path;
    }

    public static function buildWwwUrl($path, $params = [])
    {
        $path = Url::toRoute(array_merge([$path], $params));
        return \Yii::$app->params['domain']['www'] . $path;
    }

    public static function buildNullUrl()
    {
        return 'javascript:void(0)';
    }

}