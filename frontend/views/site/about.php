<?php

/* @var $about \common\models\About */

use common\helpers\LanguageHelper;

?>

<div class="container" style="max-width: 100% !important;">
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="slider">
                    <div class="slider_item" style="background-image: url(/uploads/file/<?= $about->photo ?>);">
                        <div class="slider_cat"></div>
                    </div>

                </div>
                <h1 style="text-align: center;"><?= LanguageHelper::get($about, 'title') ?></h1>
                <p><?= LanguageHelper::get($about, 'description') ?></p>
            </div>
            <div class="col-lg-3 col-md-12">
                <a href="#" class="big green">
                    <img src="img/megaphone.png" alt="">
                    Менинг <br> Овозим
                </a>
                <a href="#" class="big blue">
                    <img src="img/email.png" alt="">
                    Обратитесь <br> к хокиму
                </a>
                <div class="widget">
                    <div class="btitle">Tadbirlar</div>
                    <div class="event_box">
                        <div class="event_date">
                            <span>12</span> oktabr
                        </div>
                        <a href="#">Фиксированные цены на социально значимые лекарственные средства</a>
                    </div>
                    <div class="event_box">
                        <div class="event_date">
                            <span>12</span> oktabr
                        </div>
                        <a href="#">Фиксированные цены на социально значимые лекарственные средства</a>
                    </div>
                    <div class="event_box">
                        <div class="event_date">
                            <span>12</span> oktabr
                        </div>
                        <a href="#">Фиксированные цены на социально значимые лекарственные средства</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12">

            </div>
        </div>

    </div>
</div>