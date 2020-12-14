<?php

namespace frontend\controllers;

use common\models\Meeting;
use common\models\Saylov;
use yii\web\Controller;

class  SaylovController extends Controller
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
        $saylov = Saylov::find()->all();
        $meeting = Meeting::find()->all();
        return $this->render('index', [
                'saylov' => $saylov,
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
        $saylov = Saylov::find()->where(['id' => $id])->one();
        $saylovtop = Saylov::find()->where(['id' => $id])->orderBy(['id' =>SORT_ASC])->limit(2)->all();
        $meeting = Meeting::find()->all();
        return $this->render('view', [
                'saylovtop' => $saylovtop,
                'saylov' => $saylov,
                'meeting' => $meeting,
            ]
        );
    }

}
