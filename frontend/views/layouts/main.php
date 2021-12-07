<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<?php

$title = "title_";
$title .= Yii::$app->language;
$home = array('title_uz'=>'Bosh sahifa','title_ru'=>'Главная','title_en'=>'Home');
$arm = array('title_uz'=>'ARM','title_ru'=>'АРМ','title_en'=>'ARM');
$aarm = array('title_uz'=>'ARM haqida','title_ru'=>'Об АРМ','title_en'=>'About ARM');
$barm = array('title_uz'=>"ARM bo'limlari",'title_ru'=>'Разделы ARM','title_en'=>'ARM departments');
$news = array('title_uz'=>"Yangiliklar",'title_ru'=>'Новости','title_en'=>'News');
$photo = array('title_uz'=>"Fotogalereya",'title_ru'=>'Фотогалерея','title_en'=>'Photo gallery');
$foyda = array('title_uz'=>"Foydali",'title_ru'=>'Полезный','title_en'=>'Useful');
$yunesko = array('title_uz'=>"Zamonaviy talim tizmi",'title_ru'=>'Современная система обучения ','title_en'=>'Modern training system');
$adabiyot = array('title_uz'=>"Adabiyotlar",'title_ru'=>'Литература','title_en'=>'Literature');
$aloqa = array('title_uz'=>"Aloqa",'title_ru'=>'Контакт','title_en'=>'Contact');
$rahbar = array('title_uz'=>"Rahbariyat",'title_ru'=>'Rahbariyat','title_en'=>'Rahbariyat');
?>
    <header id="mu-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-header-area">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mu-header-top-left">
                                    <div class="mu-top-email">
                                        <i class="fa fa-envelope"></i>
                                        <span>arm@urdu.uz</span>

                                    </div>

                                    <div class="mu-top-phone">
                                        <i class="fa fa-phone"></i>
                                        <span>+998-62-2246645</span>
										<span><a href="<?= Url::to(['/site/telegram'])?>"> <img width="50px" src="https://www.iconfinder.com/data/icons/popular-services-brands-vol-2/512/telegram-512.png" />Endi biz telegramda</a></span>
										
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mu-header-top-right">
                                    <nav>
                                        <ul class="mu-top-social-nav">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                            <li><?= \cinghie\multilanguage\widgets\MultiLanguageWidget::widget([
                                                'widget_type' => 'classic', // classic or selector
                                                'image_type' => 'classic', // classic or rounded
                                                'width' => '25',
                                                'calling_controller' => $this->context
                                            ]); ?></li>
                                        </ul>

                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header  -->
    <!-- Start menu -->
    <section id="mu-menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="<?= Url::to(['/site/index'])?>"><i class="fa fa-university"></i><span>ARM</span></a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class=""><a href="<?= Url::to(['/site/index'])?>"><?=$home[$title]?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$arm[$title]?><span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= Url::to(['/site/about'])?>"><?=$aarm[$title]?></a></li>
                                 <li><a href="<?= Url::to(['/site/dep'])?>"><?=$rahbar[$title]?></a></li>
								<li><a href="<?= Url::to(['/site/department'])?>"><?=$barm[$title]?></a></li>
								
                            </ul>
                        </li>
                        <li><a href="<?= Url::to(['/site/news'])?>"><?=$news[$title]?></a></li>

                        <li><a href="<?= Url::to(['/site/foto'])?>"><?=$photo[$title]?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$foyda[$title]?><span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?=Url::to(['/site/books'])?>">Adabiyotlar</a></li>
                            </ul>
                        </li>
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$aloqa[$title]?><span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= Url::to(['/site/contact'])?>"><?=$aloqa[$title]?></a></li>
                                <li><a href="<?= Url::to(['/site/telegram'])?>">Telegram kanallar</a></li>
                            </ul>
                        </li>
                        <li><a href="http://armat.urdu.uz/" ><img src="/frontend/web/arm.PNG" alt="logo" width="180" height="30"></a></li>
						<li><a href="http://10.10.10.242/" >Elektron kutubxona</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu -->
    <!-- Start search box -->
    <div id="mu-search">
        <div class="mu-search-area">
            <button class="mu-search-close"><span class="fa fa-close"></span></button>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mu-search-form">
                            <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="mu-footer-widget">
                            <h4>Sayt xaritasi</h4>
                            <ul>
                                <li class=""><a href="<?= Url::to(['/site/index'])?>">Bosh saxifa</a></li>
                                <li><a href="<?= Url::to(['/site/about'])?>">ARM haqida </a></li>
                                <li><a href="<?= Url::to(['/site/contact'])?>">Bizning jamoa</a></li>
                                <li><a href="<?= Url::to(['/site/contact'])?>">Yangiliklar</a></li>
                                <li><a href="<?= Url::to(['/site/contact'])?>">Yunesko</a></li>

                                <li><a href="<?= Url::to(['/site/contact'])?>">Fotogaleriya</a></li>
                                <li><a href="<?= Url::to(['/site/contact'])?>">Aloqa</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="mu-footer-widget">
                            <h4>Manzilimiz</h4>
                            <address>
                                <p>Xorazm viloyati
                                    Urgench shahar
                                    H.Olimjon ko'chasi
                                    14 uy</p>
                                <p>+99862 224 67 00 </p>
                                <p>Website: www.urdu.uz</p>
                                <p>Email: urdu341@umail.uz</p>
                                <p>Transport: 7-Avtobus</p>
                                <p>220100, O'zbekiston Respublikasi, Urganch shahar,</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mu-footer-widget">
                            <img src="/frontend/web/map.jpg"style="width: 100%" class="img-thumbnail" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>&copy; MRK<a href="http://www.urdu.uz" rel="nofollow"> www.urdu.uz</a></p>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
