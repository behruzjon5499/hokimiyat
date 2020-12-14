<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */

$this->title = Yii::t('app', 'Update Gallery: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gallery-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
