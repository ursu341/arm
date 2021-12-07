<?php
/**
 * Created by PhpStorm.
 * User: MRK
 * Date: 25.02.2019
 * Time: 10:58
 */?>
<section id="mu-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-features-area">
                    <!-- Start Title -->
                    <div class="" style="margin-top: -70px">
                        <h3 style="color: #01bafd;"><b>YANGILIKLAR</b></h3>
                    </div>
                    <!-- End Title -->
                    <!-- Start features content -->
                    <div class="mu-features-content" style="margin-top: 0px">
                        <?php
                        foreach ($model as $item):
                            ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?=Yii::$app->request->baseUrl.'/web/images/'.$item->img?>" class="img-thumbnail" style="width: 300px" alt="img">
                                </div>
                                <div class="col-md-9">
                                    <a style="color: rgba(0,157,255,0.98);" href="<?= \yii\helpers\Url::to(['/site/batafsil?id='.$item->id])?>"><p><?=$item[$title]?></p></a>
                                    <p ><?= mb_substr($item[$text],'0','300')?> ...</p>
                                    <p><i class="fa fa-user"> Admin </i> <i class="fa fa-calendar"></i> <?=$item->date?>.</p>
                                    <a href="<?= \yii\helpers\Url::to(['/site/batafsil?id='.$item->id])?>">Batafsil...</a>

                                </div>

                            </div>
                            <hr>
                        <?php endforeach;?>
                    </div>
                    <hr>

                </div>
                <!-- End features content -->
            </div>
        </div>
    </div>
    </section>
