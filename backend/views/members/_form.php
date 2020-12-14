<?php
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Members */
/* @var $form yii\widgets\ActiveForm */
?>
x
<div class="members-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lavozimi')->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'hudud_id')->dropDownList(
                \yii\helpers\ArrayHelper::map(
                    \common\models\Hudud::find()->all(),
                    'id',
                    'title_ru'
                )
            ) ?>
            <?= $form->field($model, 'qabul_kunlari')->textInput(['maxlength' => true]) ?>

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
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tabLang_12" data-toggle="tab" aria-expanded="true">RU</a></li>
            <li class=""><a href="#tabLang_22" data-toggle="tab" aria-expanded="true">UZ</a></li>
            <li class=""><a href="#tabLang_32" data-toggle="tab" aria-expanded="true">EN</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tabLang_12">
                <?= $form->field($model, 'description_ru')->textarea(['rows' => 14]) ?>
            </div>
            <div class="tab-pane " id="tabLang_22">
                <?= $form->field($model, 'description_uz')->textarea(['rows' => 14]) ?>
            </div>
            <div class="tab-pane " id="tabLang_32">
                <?= $form->field($model, 'description_en')->textarea(['rows' => 14]) ?>
            </div>
        </div>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tabLang_11" data-toggle="tab" aria-expanded="true">RU</a></li>
            <li class=""><a href="#tabLang_21" data-toggle="tab" aria-expanded="true">UZ</a></li>
            <li class=""><a href="#tabLang_31" data-toggle="tab" aria-expanded="true">EN</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tabLang_11">
                <?= $form->field($model, 'majburiyat_ru')->textarea(['rows' => 14]) ?>
            </div>
            <div class="tab-pane " id="tabLang_21">
                <?= $form->field($model, 'majburiyat_uz')->textarea(['rows' => 14]) ?>
            </div>
            <div class="tab-pane " id="tabLang_31">
                <?= $form->field($model, 'majburiyat_en')->textarea(['rows' => 14]) ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
