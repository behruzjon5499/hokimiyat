<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Saylov */

$this->title = Yii::t('app', 'Create Saylov');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Saylovs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saylov-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
