<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/light.css',
        'css/reset.css',
        'css/style.css',
        'Varsity/assets/css/font-awesome.css',
        'Varsity/assets/css/bootstrap.css',
        'Varsity/assets/css/slick.css',
        'Varsity/assets/css/jquery.fancybox.css',
        'Varsity/assets/css/theme-color/default-theme.css',
        'Varsity/assets/css/style.css',
    ];
    public $js = [
        'Varsity/assets/js/jquery.min.js',
        'Varsity/assets/js/bootstrap.js',
        'Varsity/assets/js/slick.js',
        'Varsity/assets/js/waypoints.js',
        'Varsity/assets/js/jquery.counterup.js',
        'Varsity/assets/js/jquery.mixitup.js',
        'Varsity/assets/js/custom.js',
        'Varsity/assets/js/jquery.fancybox.pack.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
