<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">

</head>
<body <?php body_class(); ?>>

  <nav id="main_nav" class="bg-grey navbar navbar-default no-border-bottom no-margin-bottom white-bacground-md-down" role="navigation">
    <div class="container">
      <div class="navbar-header navbar-blue hidden-md hidden-lg">

        <button type="button" class="navbar-toggle pull-left collapsed"  data-target="#navbar-mid-collapse">
          <div id="navbar-hamburger">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>
          <div id="navbar-close" class="hidden">
            <span class="glyphicon glyphicon-remove"></span>
          </div>
        </button>

        <button type="button" class="navbar-toggle navbar-toggle-shop pull-left collapsed"  data-target="#navbar-rt-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="inner-text"> Услуги</span>
          <span class="icon-rec"></span>
        </button>

        <div class="dropdown tel-list">
          <a class="tel-number" type="button"   >
            <img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">&ensp;<span class="hide-mobile">(044) 223-7-223</span><img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/img/phone.png">
          </a>
          <ul class="dropdown-menu tel-number-dropdown">
            <li class="tel-number">&ensp;(383) 299-43-10</li>
            <li class="tel-number">&ensp;(913) 000-71-57</li>
            <li class="tel-number">&ensp;(913) 917-43-10</li>
          </ul>
        </div>

        <a class="navbar-toggle pull-left" href="#">Кабинет</a></div>
      <div class="accordion-group">
        <div class="navbar-collapse collapse navbar-left no-padding-lg-side no-padding-md-side menu_absolute_md_down" id="navbar-mid-collapse">
          <?php wpeHeadNav(); ?>
          <div class="visible-xs visible-sm back_to_buy"  data-target="#navbar-mid-collapse">
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_slider_left.png" alt="" class="margin-right-10">
            <span style="line-height: 24px;">Вернуться к покупкам</span>
          </div>
        </div>
        <div class="navbar-collapse collapse navbar-right menu_absolute_md_down" id="navbar-rt-collapse">

          <ul class="nav navbar-nav navbar-right" id="top_menu_right">
            <li class="border-right-1"><a class="text-uppercase" href="#">Магазин</a></li>
            <li><a class="text-uppercase" href="#">Услуги</a></li>
            <li><a class="text-uppercase hidden-xs hidden-sm" href="#">Кабинет</a></li>
            <li><a class="text-uppercase hidden-md hidden-lg" href="/">Главная</a></li>
          </ul>

          <div class="visible-xs visible-sm back_to_buy"  data-target="#navbar-rt-collapse">
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_slider_left.png" alt="" class="margin-right-10">
            <span style="line-height: 24px;">Вернуться к покупкам</span>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="header">
    <div class="header_background_color padding-top-20">
      <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="row">
            <div class="contacts">
              <div class="col-md-4 address padding-top-5 no-padding-left">
                <p><img src="<?php echo get_template_directory_uri(); ?>/img/map_pin.png">&ensp;&ensp;г.Новосибирск Софийская 3</p>
              </div>
              <div class="col-md-3 open-hours padding-top-5 padding-left-40">
                <p><img src="<?php echo get_template_directory_uri(); ?>/img/calendar_pin.png">&ensp;&ensp;ПН-ПТ: 9-18 </p>
              </div>
              <div class="col-md-3 no-padding-right">
                <div class="dropdown tel-list">
                  <a class="tel-number" type="button"   >
                    <img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">&ensp;
                    <span class="hide-mobile">(383) 299-43-10</span>
                    <img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/img/phone.png">
                  </a>
                  <ul class="dropdown-menu tel-number-dropdown">
                    <li class="tel-number">&ensp;(913) 000-71-57</li>
                    <li class="tel-number">&ensp;(913) 917-43-10</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 padding-left-5 no-padding-right">
                <?php /* ?>
                  <ul class="nav nav-pills language-selector pull-right">
                    <li class="no-margin-side " style="border-right: 2px solid #3d3d3d;">
                      <a class="no-margin-side no-padding padding-right-5" href="/uk/articles/alter-eyr-na-zavode-daikin-v-belgii/" title="Укр">УКР</a>
                    </li>
                    <li class="no-margin-side active">
                      <a class="no-margin-side no-padding padding-left-5" href="/articles/alter-eyr-na-zavode-daikin-v-belgii/" title="Рус">РУ</a>
                    </li>
                  </ul>
                <?php */ ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12 col-sm-12">
            <a class="navbar-brand brand-logo no-padding-top-bottom no-padding-left pull-left-md-up" href="/">
              <img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/img/logo_ru.png">
            </a>
          </div>
          <div class="col-md-3 hidden-xs hidden-sm padding-left-20 text-right margin-top-10">
            <form method="get" action="<?php echo home_url(); ?>" role="search">
              <div class="form-group block-center-xs block-center-sm no-margin-sm-bottom no-margin-xs-bottom" id="search-form">
                <input class="form-control search-txt" placeholder="пример: Чаны" type="text" name="q" value="">
                <input type="submit" class="search-btn">
              </div>
            </form>
          </div>
          <div class="col-md-3 hidden-xs hidden-sm padding-left-20 padding-right-35 margin-top-10">
            <button type="button" class="btn btn-call-back no-margin-top btn-block" data-target="#header-callback-Modal"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png">Перезвоните мне </button>
          </div>

          <div class="col-md-1 hidden-xs hidden-sm text-center margin-top-10">
            <a id="compare_link" class="no-text-decoration grey-link disabled_link" href="/compare/">
              <div class="cart-item"><img src="<?php echo get_template_directory_uri(); ?>/img/compare.png" alt="">
                <div id="compare_count" class="badge badge-cart badge-cart-main text-center" style=""></div>
                <br><span>Сравнить</span></div>
            </a>
          </div>
          <div class="col-md-1 hidden-xs hidden-sm text-center margin-top-10">
            <a class="no-text-decoration grey-link" href="/cart">
              <div class="cart-item"><img src="<?php echo get_template_directory_uri(); ?>/img/cart.png" alt="">
                <br><span>Корзина</span></div>
            </a>
          </div>

          <div class="hidden-md hidden-lg padding-bottom-10">
            <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
              <form method="get" action="<?php echo home_url(); ?>" role="search">
                <div class="form-group block-center-xs block-center-sm no-margin-sm-bottom no-margin-xs-bottom" id="search-form">
                  <input class="form-control search-txt" placeholder="пример: Чаны" type="text" name="q" value="">
                  <input type="submit" class="search-btn">
                </div>
              </form>
            </div>
            <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
              <div id="collapsible-1" class="collapse catalog_absolute_md_down">
                <div id="accordion" class="row services-menu panel-group">

                  <div id="primary-menu-proektirovanie" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-proektirovanie"  data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/ad390ef64445ad5cab8011ee104e64ac.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Проектирование</div>
                    </a>
                  </div>

                  <div id="primary-menu-montazh" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-montazh"  data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/c2bf8b117b0e85804af60da83da6de68.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Монтаж</div>
                    </a>
                  </div>

                  <div id="primary-menu-service" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-service"  data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/79d71721821e3a2b25ef65c451cbc336.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Сервис</div>
                    </a>
                  </div>

                  <div id="primary-menu-solutions" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-solutions"  data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/66400d90a118036c3260899ac548f74a.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Типовые решения</div>
                    </a>
                  </div>

                  <div id="primary-menu-articles" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-articles"  data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/2fd4378d4ba58159344c9582fde06f31.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Новости и статьи</div>
                    </a>
                  </div>

                  <div id="primary-menu-konsalting" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-konsalting"  data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/73f87224b52d5583ebe86eb37f358d9a.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Консалтинг</div>
                    </a>
                  </div>

                  <div class="col-xs-12 col-sm-12">
                    <button type="button" class="btn btn-catalog block-center"  data-target="#collapsible-1"><img class="padding-5 " alt="" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white_up.png"><span class="padding-left-15">Каталог</span></button>
                  </div>

                </div>
              </div>
              <button type="button" class="btn btn-catalog block-center"  data-target="#collapsible-1"><img class="padding-5 " alt="" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white_down.png"><span class="padding-left-15">Каталог</span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="background: linear-gradient(to top, rgba(0,0,0,0), rgba(255,255,255,1));">
      <div class="container ">
        <div class="row">
          <div class="navbar-fixed-top padding-top-10 padding-bottom-0 hidden-xs hidden-sm" id="navbar-miniheader">
            <div class="container">
              <div class="col-md-3 no-padding-side">
                <div class="col-md-2 no-padding-side padding-top-10">
                  <a  href="#collapse-miniheader" id="toggle-icons"><img src="<?php echo get_template_directory_uri(); ?>/img/open_mini_header.png" class="left" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/close_mini_header.png" class="left" alt="" style="display: none;"></a>
                </div>
                <div class="col-md-10 no-padding-left padding-top-5">
                  <a class="navbar-brand brand-logo no-padding-left" href="/" style="padding: 8px 0;"><img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/img/main_logo_miniheader.png" width="100%"></a>
                </div>
              </div>
              <div class="col-md-5 no-padding-left">
                <div class="col-md-6 no-padding-side phones-font">
                  <div class="dropdown tel-list">
                    <a class="tel-number" type="button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">&ensp;
                      <span class="hide-mobile">(383) 299-43-10</span>
                      <img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/img/phone.png">
                    </a>
                    <ul class="dropdown-menu tel-number-dropdown">
                      <li class="tel-number">&ensp;(383) 299-43-10</li>
                      <li class="tel-number">&ensp;(913) 000-71-57</li>
                      <li class="tel-number">&ensp;(913) 917-43-10</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 padding-side-10">
                  <button type="button" class="btn btn-call-back no-margin-top btn-block"  data-target="#header-callback-Modal"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png">Перезвоните мне </button>
                </div>
              </div>
              <div class="col-md-4 no-padding-side">
                <div class="row">
                  <div class="col-md-7 no-padding-side">
                    <ul class="nav navbar-nav nav-miniheader" id="top_menu_right">
                      <li><a class="text-uppercase" href="/shop/">Магазин</a></li>
                      <li><a class="text-uppercase" href="/services/">Услуги</a></li>
                      <li><a class="text-uppercase" href="/login/?next=/articles/alter-eyr-na-zavode-daikin-v-belgii/">Кабинет</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 no-padding-right text-center padding-top-10">
                    <ul class="nav nav-pills language-selector pull-right">
                      <li class="no-margin-side " style="border-right: 2px solid #3d3d3d;"><a class="no-margin-side no-padding padding-right-5" href="/uk/articles/alter-eyr-na-zavode-daikin-v-belgii/" title="Укр">УКР</a></li>
                      <li class="no-margin-side active"><a class="no-margin-side no-padding padding-left-5" href="/articles/alter-eyr-na-zavode-daikin-v-belgii/" title="Рус">РУ</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2 cart-item padding-top-5">
                    <a href="/cart"><img src="<?php echo get_template_directory_uri(); ?>/img/cart.png" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="col-md-12 header-item collapse" id="collapse-miniheader">
                <ul id="primary-menu" class="nav drop_menu margin-top-5 services-menu">
                  <li id="primary-menu-proektirovanie" class="primary-list dropdown">
                    <a href="/proektirovanie/" class="menu-item disabled dropdown-toggle" id="dLabel-proektirovanie"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/ad390ef64445ad5cab8011ee104e64ac.png" alt="">
                      <p>Проектирование</p>
                    </a>
                  </li>
                  <li id="primary-menu-montazh" class="primary-list dropdown">
                    <a href="/montazh/" class="menu-item disabled dropdown-toggle" id="dLabel-montazh"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/c2bf8b117b0e85804af60da83da6de68.png" alt="">
                      <p>Монтаж</p>
                    </a>
                  </li>
                  <li id="primary-menu-service" class="primary-list dropdown">
                    <a href="/service/" class="menu-item disabled dropdown-toggle" id="dLabel-service"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/79d71721821e3a2b25ef65c451cbc336.png" alt="">
                      <p>Сервис</p>
                    </a>
                  </li>
                  <li id="primary-menu-solutions" class="primary-list dropdown">
                    <a href="/solutions/" class="menu-item disabled dropdown-toggle" id="dLabel-solutions"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/66400d90a118036c3260899ac548f74a.png" alt="">
                      <p>Типовые решения</p>
                    </a>
                  </li>
                  <li id="primary-menu-articles" class="primary-list dropdown">
                    <a href="/articles/" class="menu-item disabled menu-item-active dropdown-toggle" id="dLabel-articles"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/2fd4378d4ba58159344c9582fde06f31.png" alt="">
                      <p>Новости и статьи</p>
                    </a>
                  </li>
                  <li id="primary-menu-konsalting" class="primary-list dropdown">
                    <a href="/konsalting/" class="menu-item disabled dropdown-toggle" id="dLabel-konsalting"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/73f87224b52d5583ebe86eb37f358d9a.png" alt="">
                      <p>Консалтинг</p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="navbar-collapse collapse col-md-12 header-item">

            <ul id="primary-menu" class="nav drop_menu margin-top-5 services-menu">
              <li id="primary-menu-proektirovanie" class="primary-list dropdown">
                <a href="/proektirovanie/" class="menu-item disabled dropdown-toggle" id="dLabel-proektirovanie"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/ad390ef64445ad5cab8011ee104e64ac.png" alt="">
                  <p>Проектирование</p>
                </a>
              </li>
              <li id="primary-menu-montazh" class="primary-list dropdown">
                <a href="/montazh/" class="menu-item disabled dropdown-toggle" id="dLabel-montazh"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/c2bf8b117b0e85804af60da83da6de68.png" alt="">
                  <p>Монтаж</p>
                </a>
              </li>
              <li id="primary-menu-service" class="primary-list dropdown">
                <a href="/service/" class="menu-item disabled dropdown-toggle" id="dLabel-service"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/79d71721821e3a2b25ef65c451cbc336.png" alt="">
                  <p>Сервис</p>
                </a>
              </li>
              <li id="primary-menu-solutions" class="primary-list dropdown">
                <a href="/solutions/" class="menu-item disabled dropdown-toggle" id="dLabel-solutions"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/66400d90a118036c3260899ac548f74a.png" alt="">
                  <p>Типовые решения</p>
                </a>
              </li>
              <li id="primary-menu-articles" class="primary-list dropdown">
                <a href="/articles/" class="menu-item disabled menu-item-active dropdown-toggle" id="dLabel-articles"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/2fd4378d4ba58159344c9582fde06f31.png" alt="">
                  <p>Новости и статьи</p>
                </a>
              </li>
              <li id="primary-menu-konsalting" class="primary-list dropdown">
                <a href="/konsalting/" class="menu-item disabled dropdown-toggle" id="dLabel-konsalting"  role="button"  ><img src="<?php echo get_template_directory_uri(); ?>/img/73f87224b52d5583ebe86eb37f358d9a.png" alt="">
                  <p>Консалтинг</p>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <div class="border-bottom border-bottom-color no-border-xs-bottom no-border-sm-bottom"></div>
    <div class="container"></div>
  </div>
  <div class="main-block">
    <div class="white-layer"></div>
