<!--==============================header=================================-->
<div class="bg">
    
    <header>
        <div class="head-line"></div>            
        <div class="main">
            <div class="head-link"><a href="#">www.demolink.org</a></div>
            <div class="login-box">
                <a href="#">Log in</a>
                <a href="#">sign up</a>
            </div>
            <div class="clear"></div>
            <div class="head-box">
                <h1><a href="#">Architex</a><span>most creative architectural bureau</span></h1>
                <ul class="social-links">
                    <li><a href="#" class="link-1 tooltip" title="Twitter"></a></li>
                    <li><a href="#" class="link-2 tooltip" title="Facebook"></a></li>
                    <li><a href="#" class="link-3 tooltip" title="Linkedin"></a></li>
                    <li><a href="#" class="link-4 tooltip" title="Flickr"></a></li>
                </ul>
                <div class="clear"></div> 
            </div>
            <nav>
                <ul class="sf-menu">
                    <li class="first active"><a href="#">Home</a></li>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Services</a>
                        <ul>
                            <li><a href="#">Services List</a></li>
                            <li><a href="#">Special Services</a>
                                <ul>
                                    <li><a href="#">Predesign</a></li>
                                    <li><a href="#">Technical Support</a></li>
                                </ul>
                            </li>
                            <li><a href="#">New Services</a></li>
                            <li><a href="#">Rendering</a></li>
                        </ul>
                    </li>
                    <li><a href="#">projects</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li class="last"><a href="#">Contacts</a></li>
                </ul>
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
                    <?php if (theme_get_setting('breadcrumb_display','stroirs')): print $breadcrumb; endif; ?>

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

                    <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>

                    <?php print render($page['content']); ?>

                    <?php print $feed_icons; ?>
                </div><!-- EOF: #main -->
                
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
                <div class="foot-logo"></div><div class="foot-text">&copy; 2012 | <a href="#">Privacy policy</a></div>
                <div class="soc-icons">
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

                </div>
                <div class="clear"></div>
            </div>
            <div class="foot"></div>
        </div>
        <div class="foot-bot"></div>
    </footer>
</div>