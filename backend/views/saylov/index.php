<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SaylovSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Saylovs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saylov-index">


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
            'title_ru',
//            'title_uz',
//            'title_en',
            'photo',
            //'description_ru:ntext',
            //'description_uz:ntext',
            //'description_en:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div></div>

</div>
