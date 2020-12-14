<?php

namespace frontend\controllers;

use common\models\Meeting;
use common\models\Services;
use yii\helpers\VarDumper;
use yii\web\Controller;

class  ServicesController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $meeting = Meeting::find()->all();
        $services = Services::find()->all();
        return $this->render('index', [
                'services' => $services,
                'meeting' => $meeting,
            ]
        );
    }

    /**
     * Creates a new Feedback model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param $id
     * @return mixed
     */


    public function actionView($id)
    {
        $services = Services::find()->where(['id' => $id])->one();
        $meeting = Meeting::find()->all();
        return $this->render('view', [
                'service' => $services,
                'meeting' => $meeting,
            ]
        );
    }

}
