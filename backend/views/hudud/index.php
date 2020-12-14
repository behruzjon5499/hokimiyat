<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HududSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hududs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hudud-index">


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
                        'value' => function (\common\models\Hudud $model) {
                            return Html::a($model->title_ru, ['hudud/view', 'id' => $model->id]);
                        },
                        'format' => 'raw',
                    ],
//            'title_uz',
//            'title_en',
                    'photo',
                    //'description_ru:ntext',
                    //'description_uz:ntext',
                    //'description_en:ntext',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

</div>