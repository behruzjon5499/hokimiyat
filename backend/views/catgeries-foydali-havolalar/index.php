<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CatgeriesFoydaliHavolalarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Catgeries Foydali Havolalars');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catgeries-foydali-havolalar-index">

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
                'value' => function (\common\models\CatgeriesFoydaliHavolalar $model) {
                    return Html::a($model->title_ru, ['catgeries-foydali-havolalar/view', 'id' => $model->id]);
                },
                'format' => 'raw',
            ],
            'title_uz',
            'title_en',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div></div>
</div>
