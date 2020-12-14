<?php

namespace frontend\controllers;

use common\models\Meeting;
use common\models\News;
use yii\helpers\VarDumper;
use yii\web\Controller;

class  NewsController extends Controller
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
        $news = News::find()->all();
        $meeting = Meeting::find()->all();
        return $this->render('index', [
                'news' => $news,
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
        $new = News::find()->where(['id' => $id])->one();
        $newstop = News::find()->orderBy(['date' =>SORT_ASC])->limit(2)->all();
        $meeting = Meeting::find()->all();
        return $this->render('view', [
                'newstop' => $newstop,
                'new' => $new,
                'meeting' => $meeting,
            ]
        );
    }

}
