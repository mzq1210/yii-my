<?php
namespace h5\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
