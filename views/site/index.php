<?php
/* @var $this yii\web\View */

use yii\bootstrap\Carousel;

$this->title = 'My Yii Application';
?>
<div class="site-index">

   <!-- <div class="jumbotron">
            <h1>Congratulations!</h1>

            <p class="lead">You have successfully created your Yii-powered application.</p>

            <p><a class="btn btn-lg btn-primary" href="http://www.yiiframework.com">Entra en la documentacion de yii <span class="badge">30</span> </a></p>
        </div> 
    -->

  <!--  <div class="row">
        <?php
            echo Carousel::widget([
                'items' => [
                    // the item contains only the image
                    '<img src="http://lorempixel.com/1200/315/"/>',
                    // equivalent to the above
                    ['content' => '<img src="http://lorempixel.com/1200/315/"/>'],
                    // the item contains both the image and the caption
                    [
                        'content' => '<img src="http://lorempixel.com/1200/315/"/>',
                        //'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                        'options' => [''],
                    ],
                 ]
            ]);
        ?>
    </div>
    -->
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
