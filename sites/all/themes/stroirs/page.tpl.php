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
                    //links__system_main_menu
                    print theme('nice_menus_main_menu', array(
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
                    <div class="clear"></div>
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

                    <?php //print $feed_icons;  ?>
                </div><!-- EOF: #main -->
            </div>
        </div>
        <?php if ($page['highlighted']): ?>
            <div id="highlighted"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
    </section>

    <!--==============================footer=================================-->
    <footer>
        <div class="main">
            <div class="bottom-menu"><?php print render($page['footer_first']); ?></div>
            <div class="page-foot">
                <div class="foot-text">&copy; <?php print date('Y'); ?> | <a href="/">stroirs.com.ua</a></div>
                <?php print render($page['footer']); ?>
                <div class="clear"></div>
            </div>
            <div class="foot"></div>
        </div>
        <!--<div class="foot-bot"></div>-->
    </footer>
</div>