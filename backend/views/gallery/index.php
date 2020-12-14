<?php

use common\helpers\GalleryHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Galleries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">


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
                'attribute' => 'status',
                'filter' => \common\helpers\GalleryHelper::statusList(),
                'value' => function (\common\models\Gallery $model) {
                    return GalleryHelper::statusLabel($model->status);
                },
                'format' => 'raw',
            ],
            'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div></div>

</div>
