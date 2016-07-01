<?php

use app\models ;
use yii\helpers\URL ;
use yii\widgets\ListView ;
use yii\widgets\ActiveForm ;
use yii\helpers\Html ;
use yii\widgets\LinkPager ;
use yii\web\Controller ;
use yii\data\Pagination ;
use yii\grid\GridView ;




$this->title = 'Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h2>Welcome to the official Hurdle website</h2>
        <p class = lead >Here you will be able to browse and download Hurdle movies in excellent 720p, 1080p and 3D quality, all at the smallest file size. Only here: Hurdle Movies Torrents.
        </p>
    </div>


    <div class="body-content">

        <div class="row">
              <h2 style="text-align:center;color:darkseagreen;background-color:rgb(128,128,128); " >Popular Downloads</h2>
            <div class="col-lg-4">
                <h2>Miracles from heaven</h2>

                <img src="/img/theme/medium-cover1.jpg" style="width: 200px;height:231px;">

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Miracles from Heaven &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Zootopia</h2>

                <img src="/img/theme/medium-cover2.jpg " style="width: 200px;height:231px;">

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Zootopia &raquo;</a></p>
            </div>

            <div class="col-lg-4">
                <h2>Gods of Egypt</h2>

                <img src="/img/theme/medium-cover3.jpg " style="width: 200px;height:231px;">
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Gods of Egypt&raquo;</a></p>
            </div>
        </div>

    </div>

    <div class="body-content">
                  <h2 style="text-align:center;color:lightseagreen;background-color:rgb(128,128,128); " >Latest Movie Torrents</h2>
        <div class="row">
            <div class="col-lg-4">
                <h2>Cleaner</h2>

                <img src="/img/theme/medium-cover4.jpg " style="width: 200px;height:231px;">


                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Cleaner&raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Atonement </h2>

                <img src="/img/theme/medium-cover5.jpg " style="width: 200px;height:231px;">

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Atonement &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>The Polar Express</h2>

                <img src="/img/theme/medium-cover6.jpg " style="width: 200px;height:231px;">

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">The Polar Express&raquo;</a></p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h2>After Life</h2>
                    <img src="/img/theme/medium-cover7.jpg " style="width: 200px;height:231px;">


                    <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">After Life &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Scoop </h2>

                    <img src="/img/theme/medium-cover8.jpg " style="width: 200px;height:231px;">

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Scoop &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <h2>Moon Walker</h2>

                    <img src="/img/theme/medium-cover9.jpg " style="width: 200px;height:231px;">

                    <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Moon Walker &raquo;</a></p>
                </div>
            </div>
        </div>



    </div>

    <div class="body-content">
        <h2 style="text-align:center;color:yellowgreen; background-color:rgb(128,128,128); "  >Upcoming Movies</h2>
        <div class="row">
            <div class="col-lg-4">
                <h2>Eye in the Sky</h2>
                <img src="/img/theme/medium-cover10.jpg " style="width: 200px;height:231px;">


                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Eye in the Sky &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Le Mans</h2>

                <img src="/img/theme/medium-cover11.jpg " style="width: 200px;height:231px;">

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Le Mans &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Allegiant</h2>

                <img src="/img/theme/medium-cover12.jpg " style="width: 200px;height:231px;">

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Allegiant &raquo;</a></p>
            </div>
        </div>

    </div>


    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <p></p> <p></p>
    <p></p>


    <div class="container">
            <div class="row">

                <div class="col-lg-4">
                <h5 class="white-text  btn "">Type of Movie</h5>
                <ul>
                    <li><a class="white-text" href="#!">Adventure</a></li>
                    <li><a class="white-text" href="#!">Horror</a></li>
                    <li><a class="white-text" href="#!">Comedy</a></li>
                    <li><a class="white-text" href="#!">Thriller</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5 class="white-text btn ">Order By</h5>
                <ul>
                    <li><a class="white-text" href="#!">Rating</a></li>
                    <li><a class="white-text" href="#!">Downloads</a></li>
                    <li><a class="white-text" href="#!">Latest</a></li>
                    <li><a class="white-text" href="#!">Year</a></li>
                </ul>
            </div>

                <div class="col-lg-4">
                    <h5 class="white-text btn ">Hurdle Services</h5>
                    <ul>
                        <li><a class="white-text" href="#!">DVD and Blu-Ray</a></li>
                        <li><a class="white-text" href="#!">TV Online</a></li>
                        <li><a class="white-text" href="#!">Advertising</a></li>
                        <li><a class="white-text" href="#!">Careers</a></li>
                    </ul>
                </div>
        </div>
</div>


</div>
