<?php

namespace frontend\controllers;

use common\models\Categories;
use common\models\Faoliyat;
use common\models\Meeting;
use yii\helpers\VarDumper;
use yii\web\Controller;

class  MeetingController extends Controller
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
        return $this->render('index', [
                'meeting' => $meeting
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
        $meeting = Meeting::find()->where(['id' => $id])->one();

        return $this->render('view', [
                'meeting' => $meeting
            ]
        );
    }

}
