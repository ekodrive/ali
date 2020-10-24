<div class="nav-holder but-hol">
    <div class="nav-scroll-bar-wrap fl-wrap">
        <div class="nav-search">
            <form action="#" class="searh-inner fl-wrap">
                <input name="se" id="se" type="text" class="search fl-wrap" placeholder="Search.." value="Search..." />
                <button class="search-submit color-bg" id="submit_btn"><i class="fal fa-search"></i> </button>
            </form>
        </div>
        <!-- nav -->
        <nav class="nav-inner" id="menu">
            <ul>
                <li>
                    <a href="<?=base_url();?>" <?php echo $active=($segment=='')?'class="act-link"':'';?>><?php echo lang('app.home');?></a>

                </li>
                <li>
                    <a href="<?=base_url('az/about')?>" <?=(($segment=="about")?" class='act-link'":'')?>>About</a>
                    <!--level 2 -->

                    <!--level 2 end -->
                </li>
                <li>
                    <a href="<?=base_url('az/portfolio')?>"<?=(($segment=="portfolio")?" class='act-link'":'')?> >Portfolio</a>
                    <!--level 2 -->
<!--                    <ul>-->
<!--                        <li><a href="portfolio.html" class="ajax">Fullscreen Grid</a></li>-->
<!--         -->
<!--                    </ul>-->
                    <!--level 2 end -->
                </li>
                <li><a href="services.html" class="ajax">Services</a></li>
                <li><a href="contacts.html" class="ajax">Contacts</a></li>

            </ul>
        </nav>
        <!-- nav end-->
        <!--lang-links-->
        <div class="lang-links fl-wrap">
            <a href="#" class="act-leng">EN</a><a href="#">FR</a>
        </div>
        <!--lang-links end-->
    </div>
    <!--nav-social-->
    <div class="nav-social">
        <span class="nav-social_title">Follow us : </span>
        <ul >
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
        </ul>
    </div>
    <!--nav-social end -->
</div>
<div class="nav-overlay">
    <div class="element"></div>
</div>