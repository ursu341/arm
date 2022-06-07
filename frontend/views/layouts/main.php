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
    $home = array('title_uz' => 'Bosh sahifa', 'title_ru' => 'Главная', 'title_en' => 'Home');
    $arm = array('title_uz' => 'ARM', 'title_ru' => 'АРМ', 'title_en' => 'ARM');
    $aarm = array('title_uz' => 'ARM haqida', 'title_ru' => 'Об АРМ', 'title_en' => 'About ARM');
    $barm = array('title_uz' => "ARM bo'limlari", 'title_ru' => 'Разделы ARM', 'title_en' => 'ARM departments');
    $news = array('title_uz' => "Yangiliklar", 'title_ru' => 'Новости', 'title_en' => 'News');
    $photo = array('title_uz' => "Fotogalereya", 'title_ru' => 'Фотогалерея', 'title_en' => 'Photo gallery');
    $foyda = array('title_uz' => "Foydali", 'title_ru' => 'Полезный', 'title_en' => 'Useful');
    $yunesko = array('title_uz' => "Zamonaviy talim tizmi", 'title_ru' => 'Современная система обучения ', 'title_en' => 'Modern training system');
    $adabiyot = array('title_uz' => "Adabiyotlar", 'title_ru' => 'Литература', 'title_en' => 'Literature');
    $aloqa = array('title_uz' => "Aloqa", 'title_ru' => 'Контакт', 'title_en' => 'Contact');
    $rahbar = array('title_uz' => "Rahbariyat", 'title_ru' => 'Rahbariyat', 'title_en' => 'Rahbariyat');
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
                                        <span><a href="<?= Url::to(['/site/telegram']) ?>"> <i
                                                        class="fa fa-telegram text-primary"
                                                        aria-hidden="true"></i>Endi biz telegramda</a></span>

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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="<?= Url::to(['/site/index']) ?>"><i
                                class="fa fa-university"></i><span>ARM</span></a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class=""><a href="<?= Url::to(['/site/index']) ?>"><?= $home[$title] ?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $arm[$title] ?><span
                                        class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= Url::to(['/site/about']) ?>"><?= $aarm[$title] ?></a></li>
                                <li><a href="<?= Url::to(['/site/dep']) ?>"><?= $rahbar[$title] ?></a></li>
                                <li><a href="<?= Url::to(['/site/department']) ?>"><?= $barm[$title] ?></a></li>

                            </ul>
                        </li>
                        <li><a href="<?= Url::to(['/site/news']) ?>"><?= $news[$title] ?></a></li>

                        <li><a href="<?= Url::to(['/site/foto']) ?>"><?= $photo[$title] ?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $foyda[$title] ?><span
                                        class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= Url::to(['/site/books']) ?>">Adabiyotlar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $aloqa[$title] ?><span
                                        class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?= Url::to(['/site/contact']) ?>"><?= $aloqa[$title] ?></a></li>
                                <li><a href="<?= Url::to(['/site/telegram']) ?>">Telegram kanallar</a></li>
                            </ul>
                        </li>
                        <li><a href="http://armat.urdu.uz/"><img src="/arm.PNG" alt="logo" width="180"
                                                                 height="30"></a></li>
                        <li><a href="http://10.10.10.242/">Elektron kutubxona</a></li>
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
                                <li class=""><a href="<?= Url::to(['/site/index']) ?>">Bosh saxifa</a></li>
                                <li><a href="<?= Url::to(['/site/about']) ?>">ARM haqida </a></li>
                                <li><a href="<?= Url::to(['/site/contact']) ?>">Bizning jamoa</a></li>
                                <li><a href="<?= Url::to(['/site/contact']) ?>">Yangiliklar</a></li>
                                <li><a href="<?= Url::to(['/site/contact']) ?>">Yunesko</a></li>

                                <li><a href="<?= Url::to(['/site/contact']) ?>">Fotogaleriya</a></li>
                                <li><a href="<?= Url::to(['/site/contact']) ?>">Aloqa</a></li>
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
                    <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s"
                         style="visibility: visible; animation-delay: 0.4s;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11942.14323581156!2d60.6068184!3d41.5576469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ecae3ad4fa60ac6!2sUrganch%20Davlat%20Universiteti!5e0!3m2!1suz!2s!4v1637305291818!5m2!1suz!2s"
                                style="border:0;" allowfullscreen="" loading="lazy" width="140%"
                                height="400rem"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="color: white">
                    Copyright UrSU ©
                    <!--      QalandarDev   https://github.com/QalandarDev -->
                    <script>document.write(new Date().getFullYear());</script>
                </div>
                <div class="col-md-6" style="text-align: end">
                    <!-- START WWW.UZ TOP-RATING -->
                    <script language="javascript" type="text/javascript">
                        top_js = "1.0";
                        top_r = "id=29603&r=" + escape(document.referrer) + "&pg=" + escape(window.location.href);
                        document.cookie = "smart_top=1; path=/";
                        top_r += "&c=" + (document.cookie ? "Y" : "N")
                    </script>
                    <script language="javascript1.1" type="text/javascript">
                        top_js = "1.1";
                        top_r += "&j=" + (navigator.javaEnabled() ? "Y" : "N")
                    </script>
                    <script language="javascript1.2" type="text/javascript">
                        top_js = "1.2";
                        top_r += "&wh=" + screen.width + 'x' + screen.height + "&px=" + (((navigator.appName.substring(0, 3) == "Mic")) ? screen.colorDepth : screen.pixelDepth)
                    </script>
                    <script language="javascript1.3" type="text/javascript">
                        top_js = "1.3";
                    </script>
                    <script language="JavaScript" type="text/javascript">
                        top_rat = "&col=0063AF&t=ffffff&p=DD7900";
                        top_r += "&js=" + top_js + "";
                        document.write('<a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target=_top></a>')
                    </script>
                    <!--                    <a href="https://linktr.ee/QalandarDev">Powered by QalandarDev</a>-->
                    <a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target="_top"></a>
                    <a href="http://www.uz/rus/toprating/cmd/stat/id/29603" target="_top"><img
                                src="https://www.uz/plugins/top_rating/count/nojs_cnt.png?id=29603&amp;pg=http%3A//urdu.uz&amp;col=0063AF&amp;t=ffffff&amp;p=DD7900"
                                alt="Топ рейтинг www.uz" width="88" height="31" border="0"></a>
                    <!-- FINISH WWW.UZ TOP-RATING -->
                </div>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
