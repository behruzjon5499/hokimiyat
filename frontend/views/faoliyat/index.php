<?php

use common\helpers\LanguageHelper;


/* @var $service \common\models\News */
/* @var $categories \common\models\Categories */
/* @var $faoliyat \common\models\Faoliyat */



?>
<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>">Bosh sahifa</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['news/index']) ?>">Faoliyat</a></li>
            <li><?= LanguageHelper::get($faoliyat, 'title') ?></li>
        </ul>
    </div>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <h1 style="text-align: center;"><?= LanguageHelper::get($faoliyat, 'title') ?> </h1>
                <div class="slider">
                    <div class="slider_item" style="background-image: url(/uploads/faoliyat/<?= $faoliyat->photo ?>);">
                        <div class="slider_cat"></div>
                    </div>
                </div>
                <p><?= LanguageHelper::get($faoliyat, 'description') ?></p>
            </div>
            <div class="col-lg-3 col-md-12">
                <?php foreach ($categories as $category): ?>
                    <a href="<?= \yii\helpers\Url::to(['faoliyat/view', 'id' => $category->id]) ?>"><h3 style="border-top: 1px solid #d3d3d3;">
                            <?= LanguageHelper::get($category, 'title') ?>
                        </h3>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
</div>