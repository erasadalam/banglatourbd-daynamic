<?php


use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<div class="slideshow-container">

    <?php  $i=1;
    $counter = count($slider);
    foreach ($slider as $image) {
    ?>
    <div class="mySlides fade">
        <div class="numbertext"><?= $i; ?> / <?= $counter; ?></div>
        <img src="<?=Url::to('@web/'.$image->image_path)?>" style="width:1000px; height: 450px;">
        <div class="text"><h1 style="color: darkred"><?= $image->title; ?></h1></div>
        <div><p style="color: darkgreen"><?= $image->description; ?></p></div>
    </div>
        <?php
        $i++;
    }?>

    <!--<div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="<?/*=Url::to('@backend/web/uploads/slider/image-14-5424.jpg')*/?>" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="<?/*=Url::to('http://localhost/banglatourbd/backend/web/uploads/slider/image-5-1384.jpg')*/?>" style="width:100%">
        <div class="text">Caption Three</div>
    </div>-->

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <?php
        $i=1;
        foreach ($slider as $image) {
    ?>
    <span class="dot" onclick="currentSlide(<?= $i; ?>)"></span>
    <?php
        $i++;
    }?>
<!--    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>-->
</div>


<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
