<?php

use abdualiym\language\Language;
use abdualiym\slider\entities\Slides;
use common\helpers\LanguageHelper;


/* @var $hudud \common\models\Hudud*/
/* @var $hududs \common\models\Hudud*/


?>
<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>">Bosh sahifa</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['news/index']) ?>">Yangiliklar</a></li>
            <li><?= LanguageHelper::get($hudud, 'title') ?></li>
        </ul>
    </div>
    <div class="wrapper">

        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="slider">
                    <div class="slider_item" style="background-image: url(/uploads/hudud/<?=$hudud->photo?>); background-size: 100%; height: 520px; display: block;">
                        <div class="slider_cat"></div>
                    </div>
                </div>
                <p><?= LanguageHelper::get($hudud, 'description') ?></p>
            </div>
            <div class="col-lg-3 col-md-12">
                <?php foreach ($hududs as $h): ?>
                    <a href="<?= \yii\helpers\Url::to(['hudud/view', 'id' => $h->id]) ?>" ><h3 style="border-top: 1px solid #d3d3d3;">
                            <?= LanguageHelper::get($h, 'title') ?>
                    </a>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</div>