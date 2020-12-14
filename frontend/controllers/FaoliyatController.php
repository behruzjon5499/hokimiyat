<?php

namespace frontend\controllers;

use common\models\Categories;
use common\models\Faoliyat;
use yii\helpers\VarDumper;
use yii\web\Controller;

class  FaoliyatController extends Controller
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
        $categories = Categories::find()->all();
        $faoliyat = Faoliyat::find()->orderBy(['id'=>SORT_DESC])->limit(1)->one();

        return $this->render('index', [
                'faoliyat' => $faoliyat,
                'categories' => $categories,
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
        $categories = Categories::find()->all();
        $faoliyat = Faoliyat::find()->where(['category_id' => $id])->one();

        return $this->render('index', [
                'faoliyat' => $faoliyat,
                'categories' => $categories,
            ]
        );
    }

}
