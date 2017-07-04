<?php

namespace app\controllers;

use app\common\components\BaseWebController;
use Yii;
use yii\log\FileTarget;

class ErrorController extends BaseWebControllerw
{
    public function actionError()
    {
        //记录错误信息到文件和数据库
        $error = Yii::$app->errorHandler->exception;
        $error_msg = '';
        if ($error) {
            $file = $error->getFile();
            $line = $error->getLine();
            $code = $error->getCode();
            $msg = $error->getMessage();

            $log = new FileTarget();
            $log->logFile = Yii::$app->getRuntimePath() . '/logs/err.log';
            $error_msg = $msg . "\r\n";
            $error_msg .= "[file:{$file}]\r\n";
            $error_msg .= "[line:{$line}]\r\n";
            $error_msg .= "[code:{$code}]\r\n";
            $error_msg .= "[url:{$_SERVER['REQUEST_URI']}]\r\n";
            $error_msg .= "[POST_DATA:" . http_build_query($_POST) . "]\r\n";

            $log->messages[] = [
                $error_msg,
                1,
                'application',
                microtime( true )
            ];

            $log->export();

        }
        return $this->render('error', [
            'err_msg' => $error_msg
        ]);
    }
}