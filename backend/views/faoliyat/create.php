<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Faoliyat */

$this->title = Yii::t('app', 'Create Faoliyat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faoliyats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faoliyat-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
