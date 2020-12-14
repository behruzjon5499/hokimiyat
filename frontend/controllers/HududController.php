<?php

namespace frontend\controllers;

use common\models\Hudud;
use common\models\Members;
use yii\web\Controller;

class  HududController extends Controller
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
        $hudud = Hudud::find()->all();
        $members = Members::find()->where(['hudud_id' => 1])->all();
        return $this->render('index', [
                'hudud' => $hudud,
                'members' => $members,
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
        $hududs = Hudud::find()->all();
        $hudud = Hudud::find()->where(['id' => $id])->one();
        $members = Members::find()->where(['hudud_id' => $id])->all();
        return $this->render('view', [
                'members' => $members,
                'hudud' => $hudud,
                'hududs' => $hududs,
            ]
        );
    }

}
