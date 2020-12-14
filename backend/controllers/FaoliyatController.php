<?php

namespace backend\controllers;

use Yii;
use common\models\Faoliyat;
use common\models\FaoliyatSearch;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FaoliyatController implements the CRUD actions for Faoliyat model.
 */
class FaoliyatController extends Controller
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
     * Lists all Faoliyat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FaoliyatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Faoliyat model.
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
     * Creates a new Faoliyat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Faoliyat();

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {

            if (!empty($_FILES['Faoliyat']['name']['image'])) {
                $model->image = $_POST['Faoliyat']['image'];
                $model->image = UploadedFile::getInstance($model, 'image');
                $model->file1 = $_POST['Faoliyat']['file'];
                $model->file1 = UploadedFile::getInstance($model, 'file');
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
     * Updates an existing Faoliyat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {

            if (!empty($_FILES['Faoliyat']['name']['image'])) {
                $model->image = $_POST['Faoliyat']['image'];
                $model->image = UploadedFile::getInstance($model, 'image');
                $model->file1 = $_POST['Faoliyat']['file'];
                $model->file1 = UploadedFile::getInstance($model, 'file');
                $model->upload();
//                VarDumper::dump($model->file1,12,true);
//                die();
                $model->save(false);
            } else {
                $model->save();
            }
            return $this->redirect(['index']);
        }
//        VarDumper::dump($model->file1,12,true);
//        die();
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Faoliyat model.
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
     * Finds the Faoliyat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Faoliyat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Faoliyat::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
