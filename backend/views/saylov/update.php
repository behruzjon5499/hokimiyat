<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Saylov */

$this->title = Yii::t('app', 'Update Saylov: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Saylovs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="saylov-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
