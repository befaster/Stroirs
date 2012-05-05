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
            <div class="login-box">&nbsp;</div>
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

                <?php print render($page['search_area']); ?>
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
        </div>
    </header>        

    <!--==============================content================================-->
    <section id="content">

        <?php if ($page['banner']): ?>
            <div class="bg-3">
                <div id="banner"><?php print render($page['banner']); ?></div>
            </div>
        <?php endif; ?>   


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
            </div>
        </div>

        <!--
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
        -->
    </section>

    <!--==============================footer=================================-->
    <footer>
        <div class="main">
            <div class="page-foot">
                <!--<div class="foot-logo"></div>--->
                <div class="foot-text">&copy; <?php print date('Y'); ?> | <a href="/">stroirs.com.ua</a></div>
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
                <?php print render($page['footer_first']); ?>
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
        <!--<div class="foot-bot"></div>-->
    </footer>
</div>