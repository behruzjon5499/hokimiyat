<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FoydaliHavolalar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foydali-havolalar-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'category_id')->dropDownList(
            \yii\helpers\ArrayHelper::map(
                \common\models\CatgeriesFoydaliHavolalar::find()->all(),
                'id',
                'title_ru'
            )
        ) ?>
    </div>
    <div class="col-md-6">
        <?php echo $form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'dropZoneTitle' => 'Загрузите аватар.',
                'msgPlaceholder' => 'Загрузите аватар.',
                'initialPreviewAsData'=>true,
                'initialPreview' => [
                    $model->photo ? '<img src="/uploads/file/' . $model->photo . '" width="200">': '<img src="/uploads/tab-panel/no-image.png" width="200">',
                ],
                'showRemove' => false,
                'showUpload' => false,

            ]
        ]); ?>


    </div>
</div>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
