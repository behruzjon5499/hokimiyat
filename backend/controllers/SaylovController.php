<?php

namespace backend\controllers;

use Yii;
use common\models\Saylov;
use common\models\SaylovSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SaylovController implements the CRUD actions for Saylov model.
 */
class SaylovController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Saylov models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SaylovSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Saylov model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Saylov model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Saylov();

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            if (!empty($_FILES['Saylov']['name']['image']) && $_FILES['Saylov']['name']['image']) {
                $model->image = $_POST['Saylov']['image'];
                $model->image = UploadedFile::getInstance($model, 'image');
                $model->image1 = $_POST['Saylov']['image1'];
                $model->image1 = UploadedFile::getInstance($model, 'image1');

                $model->upload();
                $model->save(false);
            } else {
                $model->save();
            }
            return $this->redirect(['index']);
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Saylov model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            if (!empty($_FILES['Saylov']['name']['image']) && $_FILES['Saylov']['name']['image']) {
                $model->image = $_POST['Saylov']['image'];
                $model->image = UploadedFile::getInstance($model, 'image');
                $model->image1 = $_POST['Saylov']['image1'];
                $model->image1 = UploadedFile::getInstance($model, 'image1');

                $model->upload();
                $model->save(false);
            } else {
                $model->save();
            }
            return $this->redirect(['index']);
        }


        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Saylov model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Saylov model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Saylov the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Saylov::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
