<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Meeting */

$this->title = Yii::t('app', 'Update Meeting: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Meetings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="meeting-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
