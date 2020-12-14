<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FoydaliHavolalarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Foydali Havolalars');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foydali-havolalar-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box">
        <div class="body-box">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'title_ru',
                'value' => function (\common\models\FoydaliHavolalar $model) {
                    return Html::a($model->title_ru, ['foydali-havolalar/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],
//            'title_uz',
//            'title_en',
            'photo',
            //'link',
            //'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div></div>

</div>
