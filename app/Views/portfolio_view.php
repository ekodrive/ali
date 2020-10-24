<?= $this->extend('layouts\default') ?>
<?= $this->section('content') ?>
            <!-- wrapper  -->	
            <div id="wrapper">
                <!-- content-holder  -->	
                <div class="content-holder" data-pagetitle="Portfolio Horizontal 1">
                    <!-- nav-holder-->
                    <?= $this->include('includes\navigation') ?>
                    <!-- nav-holder end -->        
                    <!-- fixed-filter-panel -->  					
                    <div class="fixed-filter-panel bot-element fw-panel hor-mob-filter">
                        <div class="fixed-filter-panel_title color-bg hor-mob-filter_btn">
                            Works Filter <i class="fal fa-long-arrow-right"></i>
                        </div>
                        <div class="gallery-filters">
                            <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">All Works</a>
                            <a href="#" class="gallery-filter " data-filter=".houses">Houses</a>
                            <a href="#" class="gallery-filter" data-filter=".apartments">Apartments</a>
                            <a href="#" class="gallery-filter" data-filter=".interior">Interior</a>
                            <a href="#" class="gallery-filter" data-filter=".design">Design</a>
                        </div>
                        <div class="count-folio round-counter">
                            <div class="num-album"></div>
                            <div class="all-album"></div>
                        </div>
                        <div class="scroll-down-wrap">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Scroll or  Swipe</span>
                        </div>
                    </div>
                    <!-- fixed-filter-panelend -->  	
                    <!--horizontal-grid   -->   
                    <div class="horizontal-grid-wrap  fl-wrap  ">
                        <!-- portfolio start -->
                        <div   id="portfolio_horizontal_container" class="one-ver-columns">
                            <!-- portfolio_item-->
                            <div class="portfolio_item interior">
                                <div class="grid-item-holder">
                                    <img  src="<?=base_url('assets')?>/images/bg/14.jpg"    alt="">
                                    <div class="carousel-title-wrap">
                                        <h2><a href="<?=base_url('pr')?>" class="ajax">New Acropolis Museum<i class="fal fa-long-arrow-right"></i></a></h2>
                                        <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- portfolio_item end-->
                            <!-- portfolio_item-->
                            <div class="portfolio_item apartments">
                                <div class="grid-item-holder">
                                    <img  src="<?=base_url('assets')?>/images/bg/2.jpg"    alt="">
                                    <div class="carousel-title-wrap">
                                        <h2><a href="portfolio-single.html" class="ajax">Norway House <i class="fal fa-long-arrow-right"></i></a></h2>
                                        <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- portfolio_item end-->
                            <!-- portfolio_item-->
                            <div class="portfolio_item interior design">
                                <div class="grid-item-holder">
                                    <img  src="<?=base_url('assets')?>/images/bg/8.jpg"    alt="">
                                    <div class="carousel-title-wrap">
                                        <h2><a href="portfolio-single.html" class="ajax">Theatre de Stoep<i class="fal fa-long-arrow-right"></i></a></h2>
                                        <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- portfolio_item end-->
                            <!-- portfolio_item-->
                            <div class="portfolio_item houses design">
                                <div class="grid-item-holder">
                                    <img  src="<?=base_url('assets')?>/images/bg/16.jpg"    alt="">
                                    <div class="carousel-title-wrap">
                                        <h2><a href="portfolio-single.html" class="ajax">Petronas Tower<i class="fal fa-long-arrow-right"></i></a></h2>
                                        <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- portfolio_item end-->
                            <!-- portfolio_item-->
                            <div class="portfolio_item apartments">
                                <div class="grid-item-holder">
                                    <img  src="<?=base_url('assets')?>/images/bg/18.jpg"    alt="">
                                    <div class="carousel-title-wrap">
                                        <h2><a href="portfolio-single.html" class="ajax">One World Trade Center<i class="fal fa-long-arrow-right"></i></a></h2>
                                        <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- portfolio_item end-->
                            <!-- portfolio_item-->
                            <div class="portfolio_item houses design">
                                <div class="grid-item-holder">
                                    <img  src="<?=base_url('assets')?>/images/bg/4.jpg"    alt="">
                                    <div class="carousel-title-wrap">
                                        <h2><a href="portfolio-single.html" class="ajax">Trinity River Audubon Centre<i class="fal fa-long-arrow-right"></i></a></h2>
                                        <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- portfolio_item end-->
                            <!-- portfolio_item-->
                            <div class="portfolio_item apartments">
                                <div class="grid-item-holder">
                                    <img  src="<?=base_url('assets')?>/images/bg/12.jpg"    alt="">
                                    <div class="carousel-title-wrap">
                                        <h2><a href="portfolio-single.html" class="ajax">West 57th Street <i class="fal fa-long-arrow-right"></i></a></h2>
                                        <p>Internet tend to repeat predefined chunks If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- portfolio_item end-->
                        </div>
                        <!-- portfolio end -->
                    </div>
                    <!--horizontal-grid end -->       
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