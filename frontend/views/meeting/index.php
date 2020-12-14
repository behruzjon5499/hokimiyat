<?php

use abdualiym\language\Language;
use abdualiym\slider\entities\Slides;
use common\helpers\LanguageHelper;


/* @var $news \common\models\News*/
/* @var $topnew \abdualiym\cms\entities\Articles */
/* @var $newsslider Slides */
/* @var $meeting \common\models\Meeting */


?>

<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="#">Bosh sahifa</a></li>
            <li>Tadbirlar</li>
        </ul>
    </div>
    <div class="wrapper">

        <div class="row">
            <div class="col-lg-9 col-md-12">
                <h1>Tadbirlar</h1>
                <div class="row">
                    <?php foreach($meeting as $m) :?>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="news_box">
                                <div class="news_img" style="background-image: url(/uploads/meeting/<?=$m->photo?>);">
                                    <div class="news_date">   <?= $m->date ?></div>
                                </div>
                                <a href="<?= \yii\helpers\Url::to(['meeting/view', 'id' => $m->id]) ?>" class="news_title"> <?= LanguageHelper::get($m, 'title') ?></a>
                                <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($m, 'description'), 150, '...'); ?> </p>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="#" class="big green">
                    <img src="../img/megaphone.png" alt="">
                    Менинг <br> Овозим
                </a>
                <a href="#" class="big blue">
                    <img src="../img/email.png" alt="">
                    Обратитесь <br> к хокиму
                </a>
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="#" class="catb">
                            <img src="../img/archive.png" alt="">
                            Normativ <br> hujjatlar
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="#" class="catb">
                            <img src="../img/list.png" alt="">
                            Interaktiv xizmatlar
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="#" class="catb">
                            <img src="../img/archive.png" alt="">
                            Takliflar va foydali maslahatlar
                        </a>
                    </div>



                </div>
            </div>
        </div>

    </div>
</div>