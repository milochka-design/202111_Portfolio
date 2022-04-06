<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157929365-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-157929365-1');
  </script>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php
  $home = esc_url(home_url('/'));
  $about = esc_url(home_url('/about/'));
  $service = esc_url(home_url('/service/'));
  $works = esc_url(home_url('/works/'));
  $contact = esc_url(home_url('/contact/'));
  ?>
  <header class="p-header l-header js-top-header">
    <div class="l-header__inner p-header__inner l-inner">
      <a class="p-header__logo" href="<?php echo esc_url(home_url('/')); ?>">milochka design</a>
      <div class="p-header__pcnav c-pcnav u-hidden-sp">
        <ul class="c-pcnav__list">
          <li class="c-pcnav__item"><a class="c-pcnav__link" href="<?php echo $home ?>">Top</a></li>
          <li class="c-pcnav__item"><a class="c-pcnav__link" href="<?php echo $about ?>">About</a></li>
          <li class="c-pcnav__item"><a class="c-pcnav__link" href="<?php echo $service ?>">Service</a></li>
          <li class="c-pcnav__item"><a class="c-pcnav__link" href="<?php echo $works ?>">Works</a></li>
          <li class="c-pcnav__item"><a class="c-pcnav__link" href="<?php echo $contact ?>">Contact</a></li>
        </ul>
      </div>
      <div class="u-hidden-pc p-header__humburger p-drawer">
        <input type="checkbox" id="drawer-toggle" class="p-drawer__checkbox">
        <label for="drawer-toggle" class="p-drawer__button "><span></span></label>
        <div class="p-drawer__drawer p-spnav ">
          <div class="p-spnav__container">
            <ul class="p-spnav__nav">
              <li class="p-spnav__item"><a class="p-spnav__link" href="<?php echo $home ?>">Top</a></li>
              <li class="p-spnav__item"><a class="p-spnav__link" href="<?php echo $about ?>">About</a></li>
              <li class="p-spnav__item"><a class="p-spnav__link" href="<?php echo $service ?>">Service</a></li>
              <li class="p-spnav__item"><a class="p-spnav__link" href="<?php echo $works ?>">Works</a></li>
              <li class="p-spnav__item"><a class="p-spnav__link" href="<?php echo $contact ?>">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </header>