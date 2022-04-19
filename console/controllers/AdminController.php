<?php

namespace console\controllers;

use common\models\User;
use yii\console\Controller;
use yii\helpers\Json;

class AdminController extends Controller
{
    public function actionIndex()
    {
        $model = new User();
        $model->username = 'qalandardev';
        $model->generateAuthKey();
        $model->setPassword('Admin2412');
        $model->generatePasswordResetToken();
        $model->email = 'admin@urdu.uz';
        $model->status = 10;
        if($model->save()){
            echo $model->username.' saqlandi';
        }else{
            echo Json::encode($model->errors);
        }
    }
}