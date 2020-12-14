<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FoydaliHavolalar */

$this->title = Yii::t('app', 'Update Foydali Havolalar: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foydali Havolalars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="foydali-havolalar-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
