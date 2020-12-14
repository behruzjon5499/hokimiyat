<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CatgeriesFoydaliHavolalar */

$this->title = Yii::t('app', 'Update Catgeries Foydali Havolalar: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Catgeries Foydali Havolalars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="catgeries-foydali-havolalar-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
