<?php

namespace app\controllers;

class CustomController extends \yii\web\Controller
{
    public function actionHello()
    {
        return $this->render('hello');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWorld()
    {
        return $this->render('world');
    }

}
