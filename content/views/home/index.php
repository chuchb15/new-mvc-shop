
<?php require('content/views/shared/header.php'); ?>
<div role="main" class="main">
    <?php
    require 'slide.php';
    require 'newproduct.php'; ?>
    <div class="home-concept">
        <div class="container">

            <div class="row center">
                <span class="sun"></span>
                <span class="cloud"></span>
                <div class="col-md-2 col-md-offset-1">
                    <div class="process-image" data-appear-animation="bounceIn">
                        <img src="public/img/v1.jpg" alt="" />
                        <strong>Nước Hoa</strong>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
                        <img src="public/img/v7.jpg" alt="" />
                        <strong>Mỹ Phẩm</strong>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
                        <img src="public/img/v9.jpg" alt="" />
                        <strong>Làm đẹp</strong>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="project-image">
                        <div id="fcSlideshow" class="fc-slideshow">
                            <ul class="fc-slides">
                                <li><a href="javascript:void(0);"><img class="img-responsive" src="public/img/v2.jpg" /></a></li>
                                <li><a href="category/1-banh-xeo"><img class="img-responsive" src="public/img/v0.jpg" /></a></li>
                                <li><a href="javascript:void(0);"><img class="img-responsive" src="public/v6.jpg" /></a></li>
                            </ul>
                        </div>
                        <strong class="our-work">Chăm sóc da</strong>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
    require 'hotproduct.php';
    require 'saleproduct.php';
    ?>
</div>
<?php
require('content/views/shared/footer.php');
