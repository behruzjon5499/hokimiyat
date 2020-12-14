<?php

use common\helpers\LanguageHelper;


/* @var $hudud \common\models\Hudud*/
/* @var $topnew  \common\models\Hudud*/


?>

<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="#"><?= Yii::t('app', 'Bosh sahifa') ?></a></li>
            <li><?= Yii::t('app', 'Hududlar') ?></li>
        </ul>
    </div>
    <div class="wrapper">

        <div class="row">
            <div class="col-lg-9 col-md-12">
                <h1 style="text-align: center;"> </h1>
                <div class="slider">
                    <div class="slider_item" style="background-image: url(/img/main.jpg); background-size: 100%; height: 500px;">
                        <div class="slider_cat"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                    <?php foreach ($hudud as $h): ?>
                        <a href="<?= \yii\helpers\Url::to(['hudud/view', 'id' => $h->id]) ?>"><h3 style="border-top: 1px solid #d3d3d3;">
                                <?= LanguageHelper::get($h, 'title') ?>
                            </h3>
                        </a>
                    <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>