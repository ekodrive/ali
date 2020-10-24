<?= $this->extend('layouts\default') ?>
<?= $this->section('content') ?>
        <!-- wrapper  -->
        <div id="wrapper">
            <!-- content-holder  -->
            <div class="content-holder" data-pagetitle="Home Half Slider">
                <!-- nav-holder-->
                <?= $this->include('includes\navigation') ?>
                <!-- nav-holder end -->
                <!--Content -->
                <div class="content full-height hidden-item home-half-slider">
                    <div class="hero-canvas-wrap">
                        <div class="dots gallery__dots" data-dots=""></div>
                    </div>
                    <!-- option-panel-->
                    <div class="option-panel bot-element">
                        <a href="about.html" class="ajax start-btn color-bg"> Start explore <i class="fal fa-long-arrow-right"></i></a>
                        <div class="swiper-counter">
                            <div id="current">01</div>
                            <div id="total"></div>
                        </div>
                        <div class="slide-progress-container">
                            <div class="slide-progress-warp">
                                <div class="slide-progress color-bg"></div>
                            </div>
                        </div>
                    </div>
                    <!--option-panel end -->
                    <!-- hero-slider-wrap -->
                    <div class="hero-slider-wrap fl-wrap full-height">
                        <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                            <div class="swiper-container">
                                <div class="swiper-wrapper" >
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="half-hero-wrap">
                                            <div class="pr-bg"></div>
                                            <div class="rotate_text">25 may 2018</div>
                                            <h1>Design of <br> Classy and Stylish <br>  <span>House </span>Interior.</h1>
                                            <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4>
                                            <div class="clearfix"></div>
                                            <a href="portfolio-single.html" class="half-hero-wrap_link ajax">View Project <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="half-hero-wrap">
                                            <div class="rotate_text">25 may 2018</div>
                                            <h1>Trinity River <br> Audubon <br><span>Center</span> Interior</h1>
                                            <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4>
                                            <div class="clearfix"></div>
                                            <a href="portfolio-single.html" class="half-hero-wrap_link ajax">View Project <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="half-hero-wrap">
                                            <div class="rotate_text">25 may 2018</div>
                                            <h1>Design  and  <br>renovation <br>   of <span>  Flat</span> in Oslo</h1>
                                            <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4>
                                            <div class="clearfix"></div>
                                            <a href="portfolio-single.html" class="half-hero-wrap_link ajax">View Project <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="half-hero-wrap">
                                            <div class="rotate_text">25 may 2018</div>
                                            <h1>Private    and <br> Stylish <br>  <span>residence</span> in Rome.</h1>
                                            <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4>
                                            <div class="clearfix"></div>
                                            <a href="portfolio-single.html" class="half-hero-wrap_link ajax">View Project <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="half-hero-wrap">
                                            <div class="rotate_text">25 may 2018</div>
                                            <h1>The Luxury <br>Norway<br><span>House</span> in Forest</h1>
                                            <h4>Praesent eu massa vel diam laoreet elementum ac sed felis. Donec suscipit ultricies risus sed mollis. Donec volutpat porta risus posuere imperdiet. </h4>
                                            <div class="clearfix"></div>
                                            <a href="portfolio-single.html" class="half-hero-wrap_link ajax">View Project <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                </div>
                            </div>
                        </div>
                        <div class="hero-slider_control-wrap bot-element">
                            <div class="hero-slider_control hero-slider-button-next"><span>Next<i class="fal fa-angle-right"></i></span> </div>
                            <div class="hero-slider_control hero-slider-button-prev"><span><i class="fal fa-angle-left"></i>Prev </span></div>
                        </div>
                        <div class="hero-slider-wrap_pagination hlaf-slider-pag"></div>
                    </div>
                    <!-- hero-slider-wrap  end-->
                    <!-- hero-slider-img-->
                    <div class="hero-slider-img hero-slider-wrap_halftwo">
                        <div class="sec-lines"></div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper" >
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="bg"  data-bg="<?=base_url('assets');?>/images/bg/8.jpg"></div>
                                    <div class="overlay"></div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="bg"  data-bg="<?=base_url('assets');?>/images/bg/1.jpg" ></div>
                                    <div class="overlay"></div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="bg"  data-bg="<?=base_url('assets');?>/images/bg/2.jpg"></div>
                                    <div class="overlay"></div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="bg"  data-bg="<?=base_url('assets');?>/images/bg/4.jpg" ></div>
                                    <div class="overlay"></div>
                                </div>
                                <!-- swiper-slide end-->
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="bg"  data-bg="<?=base_url('assets');?>/images/bg/16.jpg"></div>
                                    <div class="overlay"></div>
                                </div>
                                <!-- swiper-slide end-->
                            </div>
                        </div>
                    </div>
                    <!-- hero-slider-img  end-->
                </div>
                <!-- content  end -->
                <!-- share-wrapper-->
                <div class="share-wrapper">
                    <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> Close</div>
                    <div class="share-container fl-wrap  isShare"></div>
                </div>
                <!-- share-wrapper  end -->
            </div>
            <!-- content-holder end -->
        </div>
        <!-- wrapper end -->
<?= $this->endSection() ?>