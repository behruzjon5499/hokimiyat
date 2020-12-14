<?php

/* @var $this yii\web\View */
/* @var $model1 User */
/* @var $gallery \common\models\Gallery */
/* @var $news \common\models\News */
/* @var $newstop \common\models\News */
/* @var $services \common\models\Services */
/* @var $meeting \common\models\Meeting */

/* @var $about \common\models\About */

use common\helpers\LanguageHelper;
use common\models\User;

$this->title = 'Mirzo Ulug`bek tuman sudi';

$lang = Yii::$app->session->get('lang');
if ($lang == '') $lang = 'ru';

$title = 'title_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;

?>
<div class="container" style="max-width: 100% !important;">
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="slider">
                    <div class="slider_item" style="background-image: url(/uploads/file/<?= $news->photo ?>);">
                        <div class="slider_cat">Новости</div>
                        <div class="slider_text">
                            <a href="<?= \yii\helpers\Url::to(['news/view', 'id' => $news->id]) ?>"
                               class="slider_title"><?= LanguageHelper::get($news, 'title') ?></a>
                            <div class="slider_date">   <?= date('F d, Y', $news->date) ?></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($newstop as $n): ?>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="news_box">
                                <div class="news_img" style="background-image: url(/uploads/file/<?= $n->photo ?>);">
                                    <div class="news_date"><?= date('F d, Y', $n->date) ?></div>
                                </div>
                                <a href="<?= \yii\helpers\Url::to(['news/view', 'id' => $n->id]) ?>"
                                   class="news_title"><?= LanguageHelper::get($n, 'title') ?></a>
                                <p><?= \yii\helpers\StringHelper::truncate(LanguageHelper::get($n, 'description'), 150, '...'); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="https://mo.tashkent.uz/ru/" class="big green">
                    <img src="img/megaphone.png" alt="">
                    Менинг <br> Овозим
                </a>
                <a href="<?= \yii\helpers\Url::to(['feedback/create']) ?>" class="big blue">
                    <img src="img/email.png" alt="">
                    Обратитесь <br> к хокиму
                </a>
                <div class="widget">
                    <div class="btitle">Tadbirlar</div>
                    <?php foreach ($meeting as $m): ?>
                        <div class="event_box">
                            <div class="event_date" style="padding: 10px 0;">
                                <span><?= $m->date ?></span>
                            </div>
                            <a href="<?= \yii\helpers\Url::to(['meeting/view', 'id' => $m->id]) ?>"><?= LanguageHelper::get($m, 'title') ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="inter">
            <div class="btitle">Interaktiv xizmatlar ro'yhati</div>
            <div class="row">
                <?php foreach ($services as $service): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6"><a
                                href="<?= \yii\helpers\Url::to(['services/view', 'id' => $service->id]) ?>"
                                class="inter_box"><img src="uploads/services/<?= $service->photo ?>"
                                                       alt=""><?= LanguageHelper::get($service, 'title') ?></a></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="statis">
            <div class="btitle">Statistika</div>
            <div class="statis_list">
                <div class="statis_item">
                    <img src="img/bars1.jpg" alt="">
                </div>
                <div class="statis_item">
                    <img src="img/bars1.jpg" alt="">
                </div>
                <div class="statis_item">
                    <img src="img/bars1.jpg" alt="">
                </div>
                <div class="statis_item">
                    <img src="img/bars1.jpg" alt="">
                </div>
                <div class="statis_item">
                    <img src="img/bars1.jpg" alt="">
                </div>
                <div class="statis_item">
                    <img src="img/bars1.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="btitle">Videolavha</div>
                        <div class="video_box">
                            <iframe width="100%" height="330" src="https://www.youtube.com/embed/yAnESKb2WkM"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="btitle">Fotolavhalar</div>
                        <div class="photo_box">
                            <?php foreach ($gallery as $g): ?>
                                <a href="#" class="photo_item"
                                   style="background-image: url(/uploads/gallery/<?= $g->photo ?>);"></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="#" class="catb">
                            <img src="img/archive.png" alt="">
                            Normativ <br> hujjatlar
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="#" class="catb">
                            <img src="img/list.png" alt="">
                            Interaktiv xizmatlar
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-4 col-sm-12">
                        <a href="<?= \yii\helpers\Url::to(['feedback/create']) ?>" class="catb">
                            <img src="img/archive.png" alt="">
                            Takliflar va foydali maslahatlar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>