<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MembersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="members-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'lavozimi') ?>

    <?php // echo $form->field($model, 'hudud_id') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'qabul_kunlari') ?>

    <?php // echo $form->field($model, 'description_ru') ?>

    <?php // echo $form->field($model, 'description_uz') ?>

    <?php // echo $form->field($model, 'description_en') ?>

    <?php // echo $form->field($model, 'majburiyat_ru') ?>

    <?php // echo $form->field($model, 'majburiyat_uz') ?>

    <?php // echo $form->field($model, 'majburiyat_en') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
