<!--==============================header=================================-->
<div class="bg">
    <header>
        <div class="head-line"></div>   
        <?php if ($logo): ?>
            <div id="logo">
                <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            </div>  
        <?php endif; ?>

        <div class="main">


            <div class="login-box">
                <?php print render($page['search_area']); ?>
            </div>
            <div class="clear"></div>
            <div class="head-box">
                <?php if ($site_name || $site_slogan): ?>
                    <div class="clearfix">
                        <?php if ($site_name): ?>
                            <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
                        <?php endif; ?>
                        <?php if ($site_slogan): ?>
                            <span id="slogan"><?php print $site_slogan; ?></span>
                        <?php endif; ?>
                    </div><!-- /site-name-wrapper -->
                <?php endif; ?>    

                <ul class="social-links">
                    <li><a href="#" class="link-1 tooltip" title="Twitter"></a></li>
                    <li><a href="#" class="link-2 tooltip" title="Facebook"></a></li>
                    <li><a href="#" class="link-3 tooltip" title="Linkedin"></a></li>
                    <li><a href="#" class="link-4 tooltip" title="Flickr"></a></li>
                </ul>

                <div class="clear"></div> 
            </div>
            <nav>
                <?php if ($main_menu): ?>
                    <?php
                    print theme('links__system_main_menu', array(
                                'links' => $main_menu,
                                'attributes' => array(
                                    'id' => 'main-menu-links',
                                    'class' => array('sf-menu', 'clearfix'),
                                ),
                                'heading' => array(
                                    'text' => t('Main menu'),
                                    'level' => 'h2',
                                    'class' => array('element-invisible'),
                                ),
                            ));
                    ?>
                <?php endif; ?>
            </nav>
            <div class="clear"></div>
            <!--
            <div class="round_box">
                <div class="inner-slider">
                    <ul class="round">
                        <li>
                            <img src="<?php print path_to_theme(); ?>/images/slider-1.jpg" width="201" height="175" alt="">
                            <div class="descripton">
                                <span>Project Name:</span> <strong>Lorem ipsum dolore massa as laoreetum</strong>
                                <a class="button1" href="#">Detail</a>
                            </div>
                        </li>
                        <li>
                            <img src="<?php print path_to_theme(); ?>/images/slider-2.jpg" width="201" height="175" alt="">
                            <div class="descripton">
                                <span>Project Name:</span> <strong>Sint occaecati cupiditate non provident</strong>
                                <a class="button1" href="#">Detail</a>
                            </div>
                        </li>
                        <li><img src="<?php print path_to_theme(); ?>/images/slider-3.jpg" width="201" height="175" alt="">
                            <div class="descripton">                              
                                <span>Project Name:</span> <strong>At vero eos et accusamus et iusto</strong>
                                <a class="button1" href="#">Detail</a>                              
                            </div>
                        </li>  
                        <li><img src="<?php print path_to_theme(); ?>/images/slider-4.jpg" width="201" height="175" alt="">
                            <div class="descripton">                              
                                <span>Project Name:</span><strong>Nam libero temporede cum soluta nobis </strong>
                                <a class="button1" href="#">Detail</a>
                            </div>
                        </li>                           
                    </ul>
                    <div class="under-descr"></div>
                </div>
                <a href="#" class="round_prev"></a>
                <a href="#" class="round_next"></a>
            </div>    
            -->

        </div>
    </header>        

    <!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="container_24">
                <div id="main">
                    <?php
                    if (theme_get_setting('breadcrumb_display', 'stroirs')): print $breadcrumb;
                    endif;
                    ?>

                    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>

                    <?php if ($messages): ?>
                        <div id="console" class="clearfix">
                            <?php print $messages; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($page['help']): ?>
                        <div id="help">
                            <?php print render($page['help']); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($action_links): ?>
                        <ul class="action-links">
                            <?php print render($action_links); ?>
                        </ul>
                    <?php endif; ?>

                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?>
                        <h1><?php print $title ?></h1>
                    <?php endif; ?>

                    <?php print render($title_suffix); ?>

                    <?php if ($tabs): ?>    
                        <div class="block-tabks">
                            <?php print render($tabs); ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php endif; ?>

                    <?php print render($page['content']); ?>

                    <?php //print $feed_icons; ?>
                </div><!-- EOF: #main -->

                <!--
                <article class="grid_24">
                    <div class="wrapper p6">
                        <article class="grid_16 alpha">
                            <div class="tabs-box">
                                <ul class="tabs">
                                    <li><a href="#tab1">what we do</a></li>
                                    <li><a href="#tab2">advantages</a></li>
                                </ul>
                                <div class="tab_container">
                                    <div id="tab1" class="tab_content">
                                        <div class="page1-box1">
                                            <div class="inner">
                                                <figure class="page1-img1"><img src="<?php print path_to_theme(); ?>/images/page1-img1.jpg" alt=""></figure>
                                                <p><span>At vero eos et accusamus et iusto odio dignissimos duci mus qui blanditiis praesentium destiumomste.</span>

                                                    Sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt <a href="#">mollitia animid estum</a> laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>

                                                <p>Nam libero temporede cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.    </p>
                                            </div>
                                            <div class="clear"></div>
                                            <a class="button2" href="#">more</a>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab_content">
                                        <div class="page1-box1">
                                            <div class="inner">
                                                <figure class="page1-img1"><img src="<?php print path_to_theme(); ?>/images/page1-img2.jpg" alt=""></figure>
                                                <p><span>At vero eos et accusamus et iusto odio dignissimos duci mus qui blanditiis praesentium destiumomste.</span>

                                                    Sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt <a href="#">mollitia animid estum</a> laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>

                                                <p>Nam libero temporede cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat.    </p>
                                            </div>
                                            <div class="clear"></div>
                                            <a class="button2" href="#">more</a>
                                        </div>
                                    </div>              
                                </div>
                            </div>                
                        </article>
                        <article class="grid_7 push_1 omega">
                            <h2>categories<span></span></h2>
                            <ul class="list1">
                                <li><a href="#">our news</a></li>
                                <li><a href="#">publication archive</a></li>
                                <li><a href="#">new services</a></li>
                                <li><a href="#">our ideas</a></li>
                                <li><a href="#">our staff</a></li>
                                <li><a href="#">information for clients</a></li>
                                <li><a href="#">our events</a></li>
                                <li><a href="#">online support</a></li>
                                <li><a href="#">online forum</a></li>
                            </ul>
                        </article>                        
                    </div>
                </article>
                <article class="grid_24">
                    <div class="wrapper p9">
                        <article class="grid_16 alpha">
                            <h3 class="p7">News and events</h3>
                            <div class="page1-box2">
                                <figure class="page1-img2"><img src="<?php print path_to_theme(); ?>/images/page1-img6.png" alt=""></figure>
                                <div class="extra-wrap">
                                    <a href="#">March 20, 2012</a>
                                    <p>Sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animid estum laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio...  </p>
                                </div>
                            </div>
                            <div class="page1-box2">
                                <figure class="page1-img2"><img src="<?php print path_to_theme(); ?>/images/page1-img6.png" alt=""></figure>
                                <div class="extra-wrap">
                                    <a href="#">March 12, 2012</a>
                                    <p>Sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animid estum laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio...  </p>
                                </div>
                            </div>
                            <div class="page1-box2 p8">
                                <figure class="page1-img2"><img src="<?php print path_to_theme(); ?>/images/page1-img6.png" alt=""></figure>
                                <div class="extra-wrap">
                                    <a href="#">March 05, 2012</a>
                                    <p>Sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animid estum laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio...  </p>
                                </div>                            
                            </div>
                            <a class="button2" href="#">archive</a>
                            <a class="link1" href="#">Newsletter Signup</a>
                        </article>
                        <article class="grid_7 push_1">
                            <h2>Featured Projects<span></span></h2>
                            <div class="page1-box3">                                    
                                <div class="page1-box7">
                                    <a href="<?php print path_to_theme(); ?>/images/image-blank.png" data-gal="prettyPhoto[pp_gal]" class="lightbox-image"><div class="img-hover"></div><figure class="page1-img3"><img src="<?php print path_to_theme(); ?>/images/page1-img3.jpg" alt=""></figure></a>
                                </div>
                                <div class="page1-box7 last2">
                                    <a href="<?php print path_to_theme(); ?>/images/image-blank.png" data-gal="prettyPhoto[pp_gal]" class="lightbox-image"><div class="img-hover"></div><figure class="page1-img3"><img src="<?php print path_to_theme(); ?>/images/page1-img4.jpg" alt=""></figure></a>
                                </div>
                                <div class="page1-box7">
                                    <a href="<?php print path_to_theme(); ?>/images/image-blank.png" data-gal="prettyPhoto[pp_gal]" class="lightbox-image"><div class="img-hover"></div><figure class="page1-img3"><img src="<?php print path_to_theme(); ?>/images/page1-img5.jpg" alt=""></figure></a>
                                </div>
                                <div class="page1-box7 last2">
                                    <a href="<?php print path_to_theme(); ?>/images/image-blank.png" data-gal="prettyPhoto[pp_gal]" class="lightbox-image"><div class="img-hover"></div><figure class="page1-img3"><img src="<?php print path_to_theme(); ?>/images/page1-img7.jpg" alt=""></figure></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </article>
                -->
            </div>
        </div>

        <div class="bg-2">
            <aside>
                <div class="main">
                    <div class="container_24">
                        <article class="grid_16">
                            <h4 class="p7">About company</h4>
                            <div class="page1-box4">
                                <span>Est omnis dolore serele dusemp quibd ameto lorem astumode es magna.</span> 
                                <p class="p10">Saepe eveniet redums. Etoluptes estudesu usandaeItaque earumuel rerum hic tenetura sapiravi. Reicindis vptatibus ass iliasumes massa dolore ipsum mode enium lorem est.</p>

                                <p class="p10">Asperioreste repellat aurerum odesed necessbus saepe eveniet utoluptatesestuusandaaque omnis doloresedusempq.uibdametoaurerumoms odes necessitatibus saepe eveniet redums toluptates. </p>  
                            </div>
                        </article>
                        <article class="grid_7 push_1">
                            <div class="page1-box8">
                                <blockquote class="page1-box5">
                                    <h4 class="p11">our standards</h4>
                                    <a href="#">Est omnis doloresereleduse</a>
                                    <p>Apquibdameto aerumoms odes neces sitatibus saepe eveniet redus. Eto luptes demos estudesu usandaeItaque earum umel rerum hic tenetura...</p>
                                    <div class="page1-box6"></div>
                                </blockquote>
                                <a class="link2" href="#">Details</a>
                            </div>
                        </article>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <!--==============================footer=================================-->
    <footer>
        <div class="main">
            <div class="page-foot">
                <div class="foot-logo"></div><div class="foot-text">&copy; <?php print date('Y'); ?> | <a href="/">stroirs.com.ua</a></div>
                <div class="soc-icons">
                    <!--
                    <ul class="soc-icon">
                        <li>
                            <a class="tooltip" title="Twitter" href="#"><img src="<?php print path_to_theme(); ?>/images/soc-icon1.gif" class="grey" alt="" />
                                <img src="<?php print path_to_theme(); ?>/images/soc-icon1-grey.gif" class="color" alt="" /></a>
                        </li>
                        <li>
                            <a class="tooltip" title="Facebook" href="#"><img src="<?php print path_to_theme(); ?>/images/soc-icon2.gif" class="grey" alt="" />
                                <img src="<?php print path_to_theme(); ?>/images/soc-icon2-grey.gif" class="color" alt="" /></a>
                        </li>
                        <li>
                            <a class="tooltip" title="Linkedin" href="#"><img src="<?php print path_to_theme(); ?>/images/soc-icon3.gif" class="grey" alt="" />
                                <img src="<?php print path_to_theme(); ?>/images/soc-icon3-grey.gif" class="color" alt="" /></a>
                        </li>
                        <li>
                            <a class="tooltip" title="Flickr" href="#"><img src="<?php print path_to_theme(); ?>/images/soc-icon4.gif" class="grey" alt="" />
                                <img src="<?php print path_to_theme(); ?>/images/soc-icon4-grey.gif" class="color" alt="" /></a>
                        </li>                            
                    </ul>
                    -->
                    <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
                </div>
                
                <!--
                <div id="footer-inside">
                    <div class="footer-area first">
                        <?php  print render($page['footer_first']); ?>
                    </div>

                    <div class="footer-area second">
                        <?php //print render($page['footer_second']); ?>
                    </div>

                    <div class="footer-area third">
                        <?php print render($page['footer_third']); ?>
                    </div>
                    <?php print render($page['footer']); ?>
                </div>
                -->

                <div class="clear"></div>
            </div>
            <div class="foot"></div>
        </div>
        <div class="foot-bot"></div>
    </footer>
</div>