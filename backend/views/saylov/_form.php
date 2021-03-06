<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Saylov */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="saylov-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-8">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#ru" aria-controls="ru" role="tab" data-toggle="tab">Русский</a>
                </li>
                <li role="presentation" class=""><a href="#uz" aria-controls="uz" role="tab" data-toggle="tab">Узбекский</a>
                </li>
                <li role="presentation" class=""><a href="#en" aria-controls="en" role="tab" data-toggle="tab">Английский</a>
                </li>
            </ul>


            <div class="tab-content">
                <br>
                <div role="tabpanel" class="tab-pane active" id="ru">
                    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true])->label('Заголовок') ?>
                    <?= $form->field($model, 'description_ru')->widget(CKEditor::class, [
                        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
                            'language' => 'ru',
                        ])
                    ])->label('Контент') ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="uz">
                    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true])->label('Заголовок') ?>
                    <?= $form->field($model, 'description_uz')->widget(CKEditor::class, [
                        'editorOptions' => ElFinder::ckeditorOptions('elfinder', ['language' => 'uz'])
                    ])->label('Контент') ?>
                </div>
                <div role="tabpanel" class="tab-pane" id="en">
                    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true])->label('Заголовок') ?>
                    <?= $form->field($model, 'description_en')->widget(CKEditor::class, [
                        'editorOptions' => ElFinder::ckeditorOptions('elfinder', ['language' => 'en'])
                    ])->label('Контент') ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">

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
            <h1>Main photo</h1>
            <?php echo $form->field($model, 'image1')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'dropZoneTitle' => 'Загрузите аватар.',
                    'msgPlaceholder' => 'Загрузите аватар.',
                    'initialPreviewAsData'=>true,
                    'initialPreview' => [
                        $model->photo ? '<img src="/uploads/file/' . $model->main_photo . '" width="200">': '<img src="/uploads/tab-panel/no-image.png" width="200">',
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
