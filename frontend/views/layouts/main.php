<?php

/* @var $this \yii\web\View */
/* @var $foydali \common\models\FoydaliHavolalar */
/* @var $content string */

use common\helpers\LangHelper;
use common\helpers\LanguageHelper;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$lang = Yii::$app->session->get('lang');
if ($lang == '') $lang = 'ru';
//
//$lang = Yii::$app->session->get('lang');
//if($lang=='') $lang = 'ru';
//$_lang = ['ru' => 'RU', 'uz' => 'UZ', 'en' => 'EN'];
//
////// мультиязычность
//$lang = Yii::$app->session->get('lang');
//if ($lang == '') {
//    $lang = 'ru';
//    Yii::$app->session->set('lang', $lang);
//}
$link = 'link_' . $lang;
$title = 'title_' . $lang;
$text = 'text_' . $lang;
$name = 'name_' . $lang;
$descr = 'descr_' . $lang;
$link = 'link_' . $lang;
$material = 'material_' . $lang;
AppAsset::register($this);
$foydali= \common\models\FoydaliHavolalar::find()->all();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody()
?>
<?php
$user  = \common\models\User::find()->where(['id'=>Yii::$app->user->id])->one();
?>

<style>
    .container{
        max-width: 1340px !important;
    }
</style>
<div class="container" style="max-width: 100% !important;">
    <header>
        <div class="logo">
            <img src="/img/logo.png" alt="">
            <div class="logo_t">
                Mirzo Ulug'bek tuman
                <br> hokimligi
            </div>
        </div>
        <div class="support">
            <div class="support_top">
                <a onclick="openWin()" href="#"><i class="fa fa-mobile-phone"></i> Mobil talqini</a>
                <a href="#"><i class="fa fa-eye-slash"></i> Ko'zi zaiflar versiyasi</a>
                <a href="#"><i class="fa fa-sitemap"></i> Sayt haritasi</a>
            </div>
            <div class="support_bottom">
                <a href="#"><img src="img/madh.png" alt=""> Madhiya</a>
                <a href="#"><img src="img/gerbb.png" alt=""> Gerb</a>
                <a href="#"><img src="img/flag.png" alt=""> Bayroq</a>
            </div>
        </div>
        <div class="lang">
            <div class="lang_top">
                <a href="/ru" class="active">Ру</a>
                <a href="/en">En</a>
                <a href="/uz">O'z</a>
            </div>
            <div class="lang_date"><?= date('d.m.Y', time()) ?></div>
        </div>
    </header>
</div>

<nav class="navbar" style="padding: 0 100px;">
    <div class="container">
        <button class="dropbtn"><i class="fa fa-bars"></i></button>
        <button class="btnmenu"><i class="fa fa-bars"></i></button>
        <ul class="mobile">
            <li><a href="<?= \yii\helpers\Url::to(['site/index']) ?>"><?= Yii::t('app', 'Bosh sahifa') ?> </a></li>
            <li class="nav-item dropdown drop">
                <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  <?= Yii::t('app', 'Xokimiyat haqida') ?> </a>
                <ul class="dropdown-menu drop" style="text-align: center;">
                    <li class="drop" style="width: 100%;"><a  class="box" style="  font-size: 18px;
  color: #3b3b3b;
  padding: 10px 0px !important;
  display: inline-block;
  margin: 0px 3px;" href="<?= \yii\helpers\Url::to(['site/tashkilot']) ?>"><?= Yii::t('app', 'Вазифалар ва функциялар') ?> </a></li>
                    <li class="drop"><a style="  font-size: 18px;
  color: #3b3b3b;
  padding: 10px 0px !important;
  display: inline-block;
  margin: 0px 3px;" class="box" href="<?= \yii\helpers\Url::to(['site/tuzilma']) ?>"><?= Yii::t('app', 'Ташкилий тузилма') ?> </a></li>
                    <li class="drop"><a style="  font-size: 18px;
  color: #3b3b3b;
  padding: 10px 0px !important;
  display: inline-block;
  margin: 0px 3px;" class="box" href="<?= \yii\helpers\Url::to(['site/raxbariyat']) ?>"><?= Yii::t('app', 'Раҳбарият') ?> </a></li>
                    <li class="drop"><a  style="  font-size: 18px;
                        color: #3b3b3b;
                        padding: 10px 0px !important;
                        display: inline-block;
                        margin: 0px 3px;"  class="box" href="<?= \yii\helpers\Url::to(['site/xokimlik']) ?>"><?= Yii::t('app', 'Апарат') ?> </a></li>
                    <li class="drop"><a style="  font-size: 18px;
  color: #3b3b3b;
  padding: 10px 0px !important;
  display: inline-block;
  margin: 0px 3px;"  class="box" href="<?= \yii\helpers\Url::to(['site/vazifalar']) ?>"><?= Yii::t('app', 'Tуман ҳокимлиги тасарруфидаги ташкилотлар') ?> </a></li>
                    <li class="drop"><a style="  font-size: 18px;
  color: #3b3b3b;
  padding: 10px 0px !important;
  display: inline-block;
  margin: 0px 3px;"  class="box" href="<?= \yii\helpers\Url::to(['site/fuqarolar']) ?>"><?= Yii::t('app', 'Фуқароларни ва мурожаатларни қабул қилиш тартиби') ?> </a></li>
                </ul>
            </li>
            <li><a href="<?= \yii\helpers\Url::to(['faoliyat/index']) ?>"><?= Yii::t('app', 'Faoliyat') ?> </a></li>
            <li><a href="<?= \yii\helpers\Url::to(['news/index']) ?>"><?= Yii::t('app', 'Yangiliklar') ?> </a></li>
            <li><a href="<?= \yii\helpers\Url::to(['services/index']) ?>"><?= Yii::t('app', 'Interaktiv xizmatlar') ?> </a></li>
            <li><a href="<?= \yii\helpers\Url::to(['hudud/index']) ?>"><?= Yii::t('app', 'Hududlar') ?> </a></li>
            <li><a href="<?= \yii\helpers\Url::to(['saylov/index']) ?>"><?= Yii::t('app', 'Saylov-2019') ?></a></li>
        </ul>
        <button class="search"><i class="fa fa-search"></i></button>
        <div class="search_box">
            <form action="#">
                <input type="text" placeholder="Qidiruv">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="navbar_drop">
            <button class="dropbtnclose"><i class="fa fa-close"></i></button>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="navbar_drop-title"><?= Yii::t('app', 'Xokimiyat haqida') ?></div>
                    <ul>
                        <li><a href="<?= \yii\helpers\Url::to(['site/tashkilot']) ?>"><?= Yii::t('app', 'Вазифалар ва Функциялар') ?> </a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['site/tuzilma']) ?>"><?= Yii::t('app', 'Ташкилий тузилма') ?> </a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['site/raxbariyat']) ?>"><?= Yii::t('app', 'Раҳбарият') ?> </a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['site/xokimlik']) ?>"><?= Yii::t('app', 'Апарат') ?> </a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['site/vazifalar']) ?>"><?= Yii::t('app', 'Туман ҳокимлиги тасарруфидаги ташкилотлар') ?> </a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['site/fuqarolar']) ?>"><?= Yii::t('app', 'Фуқароларни ва мурожаатларни қабул қилиш тартиби') ?> </a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    
</nav>

<div class="wrap">

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>

</div>
<div class="container" style="max-width: 100% !important;">
    <div class="wrapper">
<div class="links">
    <div class="btitle">Foydali havolalar</div>
<!--    <nav>-->
<!--        <div class="nav nav-tabs" id="nav-tab" role="tablist">-->
<!--            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Davlat</a>-->
<!--            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Xokimiyatlar</a>-->
<!--            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sanoat</a>-->
<!--        </div>-->
<!--    </nav>-->
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <?php foreach($foydali as $f):?>
            <div class="nav_item" >
                <div class="nav_box" style="height: 180px !important;">
                    <img src="/uploads/havolalar/<?=$f->photo?>">
                    <div class="nav_t"><?= LanguageHelper::get($f, 'title') ?></div>
                    <a href="<?=$f->link?>"><?=$f->link?></a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...2</div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...3</div>
    </div>
</div>
<footer>
    <div class="container"style="max-width: 100% !important;">
        <div class="copy">© 2020. Мирзо Улугбекский район</div>
        <div class="author">Разработан  Tuitsoft.uz</div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
