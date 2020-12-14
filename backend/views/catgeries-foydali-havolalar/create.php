<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CatgeriesFoydaliHavolalar */

$this->title = Yii::t('app', 'Create Catgeries Foydali Havolalar');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Catgeries Foydali Havolalars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catgeries-foydali-havolalar-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
