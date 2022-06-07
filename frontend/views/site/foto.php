<?php

/**
 * @var $item Foto
 * @var $model Foto[]
 */

use backend\models\Foto;
use kv4nt\owlcarousel\OwlCarouselWidget;
use yii\bootstrap\Html;

OwlCarouselWidget::begin([
    'container' => 'div',
    'assetType' => OwlCarouselWidget::ASSET_TYPE_CDN,
    'jqueryFunction' => '$',// or $
    'containerOptions' => [
        'id' => 'container-id',
        'class' => 'container-class owl-theme'
    ],
    'pluginOptions' => [
        'autoplay' => true,
        'autoplayTimeout' => 3000,
        'items' => 3,
        'loop' => true,
        'itemsDesktop' => [1199, 3],
        'itemsDesktopSmall' => [979, 3]
    ]
]);
?>
<?php foreach ($model as $item) : ?>
    <div class="item-class"><img src="<?= Yii::getAlias('@web') . '/images/' . $item->img ?>" alt="Image 2"></div>
<?php endforeach; ?>

<?php OwlCarouselWidget::end(); ?>


