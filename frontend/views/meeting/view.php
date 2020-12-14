<?php

use abdualiym\language\Language;
use abdualiym\slider\entities\Slides;
use common\helpers\LanguageHelper;


/* @var $new \common\models\News*/
/* @var $newstop \abdualiym\cms\entities\Articles */
/* @var $news Slides */
/* @var $meeting \common\models\Meeting */

?>
<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>">Bosh sahifa</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['news/index']) ?>">Tadbirlar</a></li>
            <li><?= LanguageHelper::get($meeting, 'title') ?></li>
        </ul>
    </div>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <h1>
                    <?= LanguageHelper::get($meeting, 'title') ?>
                    <div class="dd"> <?=  $meeting->date ?></div>
                </h1>
                <div class="view">
                    <div class="view_img" style="background-image: url(/uploads/meeting/<?=$meeting->photo?>);"></div>
                    <p> <?= LanguageHelper::get($meeting, 'description') ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="#" class="big green">
                    <img src="../../../img/megaphone.png" alt="">
                    Менинг <br> Овозим
                </a>
                <a href="#" class="big blue">
                    <img src="../../../img/email.png" alt="">
                    Обратитесь <br> к хокиму
                </a>
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="#" class="catb">
                            <img src="../../../img/archive.png" alt="">
                            Normativ <br> hujjatlar
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="#" class="catb">
                            <img src="../../../img/list.png" alt="">
                            Interaktiv xizmatlar
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="#" class="catb">
                            <img src="../../../img/archive.png" alt="">
                            Takliflar va foydali maslahatlar
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>