<?php

use abdualiym\slider\entities\Slides;
use common\helpers\LanguageHelper;


/* @var $saylov \common\models\News*/
/* @var $saylovtop \abdualiym\cms\entities\Articles */
/* @var $newsslider Slides */

/* @var $meeting \common\models\Meeting */
?>
<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>">Bosh sahifa</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['saylov/index']) ?>">Saylov</a></li>
            <li><?= LanguageHelper::get($saylov, 'title') ?></li>
        </ul>
    </div>
    <div class="wrapper">

        <div class="row">
            <div class="col-lg-9 col-md-12">
                <h1>
                    <?= LanguageHelper::get($saylov, 'title') ?>
                    <div class="dd">2020-10-11</div>
                </h1>
                <div class="view">
                    <div class="view_img" style="background-image: url(/uploads/saylov/<?=$saylov->main_photo?>);"></div>
                    <p> <?= LanguageHelper::get($saylov, 'description') ?></p>
                </div>
                <div class="view_other">Boshqa yangiliklar</div>
                <div class="row">

                    <?php foreach($saylovtop as $n) :?>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="news_box">
                                <div class="news_img" style="background-image: url(/uploads/saylov/<?=$n->photo?>);">
                                    <div class="news_date">  </div>
                                </div>
                                <a href="<?= \yii\helpers\Url::to(['news/view', 'id' => $n->id]) ?>" class="news_title"> <?= LanguageHelper::get($n, 'title') ?></a>
                                  </div>
                        </div>
                    <?php endforeach;?>

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
                <div class="widget">
                    <div class="btitle">Tadbirlar</div>
                    <?php foreach($meeting as $m):?>
                        <div class="event_box">
                            <div class="event_date" style="padding: 10px 0;">
                                <span><?=  $m->date ?></span>
                            </div>
                            <a href="<?= \yii\helpers\Url::to(['meeting/view', 'id' => $m->id]) ?>"><?= LanguageHelper::get($m, 'title') ?></a>
                        </div>
                    <?php endforeach;?>
                </div>
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