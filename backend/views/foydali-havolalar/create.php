<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FoydaliHavolalar */

$this->title = Yii::t('app', 'Create Foydali Havolalar');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foydali Havolalars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foydali-havolalar-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
