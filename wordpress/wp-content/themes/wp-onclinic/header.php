<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="telephone=no" name="format-detection">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
    <!-- meta -->

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!-- css + javascript -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <div class="page">
    <div class="head">
      <div class="header block cf">
        <div class="logo">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img"></a>
        </div>
        <div class="header-right">
          <div class="line1 cf">
          </div>
          <div class="line2 cf">
            <div class="order-link">
              <a class="button" href="<?php echo home_url(); ?>/zapis.htm">Запись к врачу онлайн</a>
            </div>
            <div class="top-phones">
              <div class="phones">
                <div class="code">
                  <p>8 (727)</p>
                  <p>8 (707)</p>
                  <p>8 (705)</p>
                </div>
                <div class="number">
                  <span>ежедневно с 8:00 до 20:00</span>
                  <p><a href="tel:+7 (727) 250-10-05">250-10-05</a></p>
                </div>
              </div>
            </div>
            <div class="top-teaser">
              <a href="<?php echo home_url(); ?>/aktsii">
                <img src="<?php echo get_template_directory_uri(); ?>/img/teaser-percent.png">
                <p>C 1 по 16 августа скидка 20%</p>
              </a>
            </div>
          </div>
          <div class="line3 hor-menu">
            <?php wpeHeadNav(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- fixed head -->
    <div id="fix-head" class="head fix-head" style="top: 0px;">
      <div class="header block cf">
        <div class="logo">
          <a href="./index_files/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
        </div>
        <div class="header-right">
          <div class="line3 hor-menu">
            <?php wpeHeadNav(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- end fixed head -->
    <div class="mob-menu">
      <div class="block cf">
        <div class="hor-menu-mob">
          <div class="main-menu-btn">
            <span>Меню</span>
            <div class="main-menu-mob">
              <?php wpeHeadNav(); ?>
            </div>
          </div>
        </div>
        <div class="dep-menu">
          <div class="dep-menu-btn">
            <span>Отделения</span>
            <div class="menu-left">
              <?php wpeSideNav(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

