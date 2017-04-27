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
        <button type="button" class="navbar-toggle pull-left collapsed" data-toggle="collapse" data-target="#navbar-mid-collapse">
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
        <button type="button" class="navbar-toggle navbar-toggle-shop pull-left collapsed" data-toggle="collapse" data-target="#navbar-rt-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="inner-text"> Услуги</span>
          <span class="icon-rec"></span>
        </button>
        <div class="dropdown tel-list">
          <a class="tel-number" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">&ensp;<span class="hide-mobile">(044) 223-7-223</span><img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/img/phone.png"></a>
          <ul class="dropdown-menu tel-number-dropdown">
            <li class="tel-number">&ensp;(066) 366-43-20</li>
            <li class="tel-number">&ensp;(063) 397-02-64</li>
            <li class="tel-number">&ensp;(067) 444-75-74</li>
          </ul>
        </div>
        <a class="navbar-toggle pull-left" href="/cabinet/">Кабинет</a></div>
      <div class="accordion-group">
        <div class="navbar-collapse collapse navbar-left no-padding-lg-side no-padding-md-side menu_absolute_md_down" id="navbar-mid-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="padding-right-10"><a href="/about/" class="padding-right-10"> О компании </a></li>
            <li class="padding-right-10"><a href="/vakancii/" class="padding-right-10"> Вакансии </a></li>
            <li class="padding-right-10"><a href="/objects/" class="padding-right-10"> Объекты </a></li>
            <li class="padding-right-10"><a href="/reviews/" class="padding-right-10"> Отзывы </a></li>
            <li class="padding-right-10"><a href="/warranty/" class="padding-right-10"> Гарантия </a></li>
            <li class="padding-right-10"><a href="/delivery/" class="padding-right-10"> Доставка </a></li>
            <li class="padding-right-10"><a href="/certificates/" class="padding-right-10"> Сертификаты </a></li>
            <li class="padding-right-10"><a href="/bonuses/" class="padding-right-10"> Бонусы </a></li>
            <li class="padding-right-10"><a href="/contacts/" class="padding-right-10"> Контакты </a></li>
          </ul>
          <div class="visible-xs visible-sm back_to_buy" data-toggle="collapse" data-target="#navbar-mid-collapse">
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_slider_left.png" alt="" class="margin-right-10">
            <span style="line-height: 24px;">Вернуться к покупкам</span>
          </div>
        </div>
        <div class="navbar-collapse collapse navbar-right menu_absolute_md_down" id="navbar-rt-collapse">
          <ul class="nav navbar-nav navbar-right" id="top_menu_right">
            <li class="border-right-1"><a class="text-uppercase" href="/shop/">Магазин</a></li>
            <li class=""><a class="text-uppercase" href="/services/">Услуги</a></li>
            <li><a class="text-uppercase hidden-xs hidden-sm" href="/login">Кабинет</a></li>
            <li class=""><a class="text-uppercase hidden-md hidden-lg" href="/">Главная</a></li>
          </ul>
          <div class="visible-xs visible-sm back_to_buy" data-toggle="collapse" data-target="#navbar-rt-collapse">
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
                <p><img class="" src="<?php echo get_template_directory_uri(); ?>/img/map_pin.png">&ensp;&ensp;03127, Киев, пр-т Голосеевский, 93 офис 120 </p>
              </div>
              <div class="col-md-3 open-hours padding-top-5 padding-left-40">
                <p><img src="<?php echo get_template_directory_uri(); ?>/img/calendar_pin.png">&ensp;&ensp;ПН-ПТ: 9-18 </p>
              </div>
              <div class="col-md-3 no-padding-right">
                <div class="dropdown tel-list">
                  <a class="tel-number" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">&ensp;<span class="hide-mobile">(044) 223-7-223</span><img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/img/phone.png"></a>
                  <ul class="dropdown-menu tel-number-dropdown">
                    <li class="tel-number">&ensp;(066) 366-43-20</li>
                    <li class="tel-number">&ensp;(063) 397-02-64</li>
                    <li class="tel-number">&ensp;(067) 444-75-74</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 padding-left-5 no-padding-right">
                <ul class="nav nav-pills language-selector pull-right">
                  <li class="no-margin-side " style="border-right: 2px solid #3d3d3d;"><a class="no-margin-side no-padding padding-right-5" href="/uk/articles/alter-eyr-na-zavode-daikin-v-belgii/" title="Укр">УКР</a></li>
                  <li class="no-margin-side active"><a class="no-margin-side no-padding padding-left-5" href="/articles/alter-eyr-na-zavode-daikin-v-belgii/" title="Рус">РУ</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12 col-sm-12">
            <a class="navbar-brand brand-logo no-padding-top-bottom no-padding-left pull-left-md-up" href="/"><img class="img-responsive" alt="Логотип компании Альтер Эйр" src="<?php echo get_template_directory_uri(); ?>/img/logo_ru.png"></a>
          </div>
          <div class="col-md-3 hidden-xs hidden-sm padding-left-20 text-right margin-top-10">
            <form action="/search/" class="" role="search">
              <div class="form-group block-center-xs block-center-sm no-margin-sm-bottom no-margin-xs-bottom" id="search-form">
                <input class="form-control search-txt" placeholder="пример: Silent 100" type="text" name="q" value="">
                <input type="submit" class="search-btn">
              </div>
            </form>
          </div>
          <div class="col-md-3 hidden-xs hidden-sm padding-left-20 padding-right-35 margin-top-10">
            <button type="button" class="btn btn-call-back no-margin-top btn-block" data-toggle="modal" data-target="#header-callback-Modal"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png">Перезвоните мне </button>
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
              <form action="/search/" class="" role="search">
                <div class="form-group block-center-xs block-center-sm no-margin-sm-bottom no-margin-xs-bottom" id="search-form">
                  <input class="form-control search-txt" placeholder="пример: Silent 100" type="text" name="q" value="">
                  <input type="submit" class="search-btn">
                </div>
              </form>
            </div>
            <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
              <div id="collapsible-1" class="collapse catalog_absolute_md_down">
                <div id="accordion" class="row services-menu panel-group">
                  <div id="primary-menu-proektirovanie" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-proektirovanie" data-toggle="collapse" data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/ad390ef64445ad5cab8011ee104e64ac.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Проектирование</div>
                    </a><b class="main-open-caret"></b>
                    <div class="panel-collapse collapse" id="ddLabel-proektirovanie">
                      <hr class="no-margin">
                      <div id="ggLabel-proektirovanie">
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/proektirovanie-ventiljacii/" class="disabled">Проектирование систем вентиляции</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/engineering-konditsionirovanie/" class="disabled">Проектирование систем кондиционирования</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/engineering-otoplenie/" class="disabled">Проектирование систем отопления</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/proektirovanie-sistem-alternativnoy-energetiki/" class="disabled">Проектирование систем альтернативной энергетики</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/engineering-osushenie/" class="disabled">Проектирование систем осушения воздуха и вентиляции бассейнов</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/proektirovanie-sistem-vodoochistki/" class="disabled">Проектирование систем водоочистки</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/sistema-tumanoobrazovaniya/" class="disabled">Проектирование систем туманообразования</a></div>
                      </div>
                      <hr class="no-margin">
                    </div>
                  </div>
                  <div id="primary-menu-montazh" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-montazh" data-toggle="collapse" data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/c2bf8b117b0e85804af60da83da6de68.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Монтаж</div>
                    </a><b class="main-open-caret"></b>
                    <div class="panel-collapse collapse" id="ddLabel-montazh">
                      <hr class="no-margin">
                      <div id="ggLabel-montazh">
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/montazh-konditsionirovanija/" class="disabled">Монтаж систем кондиционирования</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/montazh-vent/" class="disabled">Монтаж систем вентиляции</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/montazh-otoplenie/" class="disabled">Монтаж систем отопления</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/montazh-alter-energy/" class="disabled">Монтаж систем альтернативной энергетики</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/montazh-vodoochistka/" class="disabled">Монтаж систем водоочистки</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/montazh-sysytem-osush/" class="disabled">Монтаж систем осушения воздуха</a></div>
                      </div>
                      <hr class="no-margin">
                    </div>
                  </div>
                  <div id="primary-menu-service" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-service" data-toggle="collapse" data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/79d71721821e3a2b25ef65c451cbc336.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Сервис</div>
                    </a><b class="main-open-caret"></b>
                    <div class="panel-collapse collapse" id="ddLabel-service">
                      <hr class="no-margin">
                      <div id="ggLabel-service">
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/servis-kond/" class="disabled">Сервис систем кондиционирования</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/servis-vent/" class="disabled">Сервис систем вентиляции</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/servis-altenergy/" class="disabled">Сервис систем альтернативной энергетики</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/servis-vodopodgotovka/" class="disabled">Сервис систем водоочистки</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/servis-ochistitel/" class="disabled">Сервис очистителей и увлажнителей воздуха</a></div>
                      </div>
                      <hr class="no-margin">
                    </div>
                  </div>
                  <div id="primary-menu-solutions" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-solutions" data-toggle="collapse" data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/66400d90a118036c3260899ac548f74a.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Типовые решения</div>
                    </a><b class="main-open-caret"></b>
                    <div class="panel-collapse collapse" id="ddLabel-solutions">
                      <hr class="no-margin">
                      <div id="ggLabel-solutions">
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/reshenije-kondicionirovanie/" class="disabled">Кондиционирование воздуха</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/reshenije-ventiljacija/" class="disabled">Системы вентиляции</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/reshenije-otoplenie/" class="disabled">Системы отопления</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/reshenije-alternativa/" class="disabled">Альтернативная энергетика</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/reshenije-osushenie/" class="disabled">Осушение воздуха и вентиляция бассейнов</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/reshenie-vodopodgotovka/" class="disabled">Системы водоочистки</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/reshenie-uvlazhnenie/" class="disabled">Системы увлажнения и очистки воздуха</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/reshenie-passivny-dom/" class="disabled">Энергоэффективные пассивные дома</a></div>
                      </div>
                      <hr class="no-margin">
                    </div>
                  </div>
                  <div id="primary-menu-articles" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-articles" data-toggle="collapse" data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/2fd4378d4ba58159344c9582fde06f31.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Новости и статьи</div>
                    </a><b class="main-open-caret"></b>
                    <div class="panel-collapse collapse" id="ddLabel-articles">
                      <hr class="no-margin">
                      <div id="ggLabel-articles">
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/sravnenie-oborudovanija/" class="disabled">Сравнение продуктов и решений</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/opisanie-oborudovanija/" class="disabled">Обзор оборудования</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/sovety-po-vyboru/" class="disabled">Советы по выбору</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/wiki-stati/" class="disabled">Wiki-статьи</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/novosti-kompanii/" class="disabled">Новости компаний и рынка</a></div>
                      </div>
                      <hr class="no-margin">
                    </div>
                  </div>
                  <div id="primary-menu-konsalting" class="col-sm-6 col-xs-12 panel main_panel_mob">
                    <a class="no-wrap collapsed" href="#ddLabel-konsalting" data-toggle="collapse" data-parent="#accordion" role="button"><img style="vertical-align: middle" src="<?php echo get_template_directory_uri(); ?>/img/73f87224b52d5583ebe86eb37f358d9a.png" alt="">
                      <div class="inline-middle normal-wrap a-text">Консалтинг</div>
                    </a><b class="main-open-caret"></b>
                    <div class="panel-collapse collapse" id="ddLabel-konsalting">
                      <hr class="no-margin">
                      <div id="ggLabel-konsalting">
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/konsalting/" class="disabled">Инженерный консалтинг</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/soprovojdenie/" class="disabled">Сопровождение проектов в городах Украины</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/konsalting-sistem-alternativnoy-energetiki/" class="disabled">Консалтинг систем альтернативной энергетики</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/kompred/" class="disabled">Разработка коммерческих предложений под проект</a></div>
                        <div class="drop-list drop-list-item margin-top-bottom-10"><a href="/services/specialist-consulting/" class="disabled">Консультация инженера в области проектирования</a></div>
                      </div>
                      <hr class="no-margin">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12">
                    <button type="button" class="btn btn-catalog block-center" data-toggle="collapse" data-target="#collapsible-1"><img class="padding-5 " alt="" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white_up.png"><span class="padding-left-15">Каталог</span></button>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-catalog block-center" data-toggle="collapse" data-target="#collapsible-1"><img class="padding-5 " alt="" src="<?php echo get_template_directory_uri(); ?>/img/arrow_white_down.png"><span class="padding-left-15">Каталог</span></button>
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
                  <a data-toggle="collapse" href="#collapse-miniheader" id="toggle-icons"><img src="<?php echo get_template_directory_uri(); ?>/img/open_mini_header.png" class="left" alt=""><img src="<?php echo get_template_directory_uri(); ?>/img/close_mini_header.png" class="left" alt="" style="display: none;"></a>
                </div>
                <div class="col-md-10 no-padding-left padding-top-5">
                  <a class="navbar-brand brand-logo no-padding-left" href="/" style="padding: 8px 0;"><img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/img/main_logo_miniheader.png" width="100%"></a>
                </div>
              </div>
              <div class="col-md-5 no-padding-left">
                <div class="col-md-6 no-padding-side phones-font">
                  <div class="dropdown tel-list">
                    <a class="tel-number" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="hide-mobile" src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">&ensp;<span class="hide-mobile">(044) 223-7-223</span><img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/img/phone.png"></a>
                    <ul class="dropdown-menu tel-number-dropdown">
                      <li class="tel-number">&ensp;(066) 366-43-20</li>
                      <li class="tel-number">&ensp;(063) 397-02-64</li>
                      <li class="tel-number">&ensp;(067) 444-75-74</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 padding-side-10">
                  <button type="button" class="btn btn-call-back no-margin-top btn-block" data-toggle="modal" data-target="#header-callback-Modal"><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png">Перезвоните мне </button>
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
                    <a href="/proektirovanie/" class="menu-item disabled dropdown-toggle" id="dLabel-proektirovanie" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/ad390ef64445ad5cab8011ee104e64ac.png" alt="">
                      <p>Проектирование</p>
                    </a>
                    <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-proektirovanie">

                    <img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;">
                    <img class="dropdown-pimary-img" src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;">

                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vent_bak.png"><a href="/services/proektirovanie-ventiljacii/" class="disabled">Проектирование систем вентиляции</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/cond_2_YDSNHRt.png"><a href="/services/engineering-konditsionirovanie/" class="disabled">Проектирование систем кондиционирования</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/ot.png"><a href="/services/engineering-otoplenie/" class="disabled">Проектирование систем отопления</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/alten.png"><a href="/services/proektirovanie-sistem-alternativnoy-energetiki/" class="disabled">Проектирование систем альтернативной энергетики</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/bas1.png"><a href="/services/engineering-osushenie/" class="disabled">Проектирование систем осушения воздуха и вентиляции бассейнов</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/voda.png"><a href="/services/proektirovanie-sistem-vodoochistki/" class="disabled">Проектирование систем водоочистки</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/Untitled-1_e1SvqIQ.png"><a href="/services/sistema-tumanoobrazovaniya/" class="disabled">Проектирование систем туманообразования</a></li>
                    </ul>
                  </li>
                  <li id="primary-menu-montazh" class="primary-list dropdown">
                    <a href="/montazh/" class="menu-item disabled dropdown-toggle" id="dLabel-montazh" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/c2bf8b117b0e85804af60da83da6de68.png" alt="">
                      <p>Монтаж</p>
                    </a>
                    <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-montazh">

                    <img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;">
                    <img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/ventI_FkvBOgm.png" hidefocus="true" style="bottom: -35px; right: -35px;">

                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/cond_Ym44E2e.png"><a href="/montazh-konditsionirovanija/" class="disabled">Монтаж систем кондиционирования</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/mont_vent.png"><a href="/montazh-vent/" class="disabled">Монтаж систем вентиляции</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/otoplenie1.png"><a href="/montazh-otoplenie/" class="disabled">Монтаж систем отопления</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/alt_en_E0VNlSf.png"><a href="/montazh-alter-energy/" class="disabled">Монтаж систем альтернативной энергетики</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/voda_lwoRSav.png"><a href="/montazh-vodoochistka/" class="disabled">Монтаж систем водоочистки</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/bassein_9P4cdRc.png"><a href="/montazh-sysytem-osush/" class="disabled">Монтаж систем осушения воздуха</a></li>
                    </ul>
                  </li>
                  <li id="primary-menu-service" class="primary-list dropdown">
                    <a href="/service/" class="menu-item disabled dropdown-toggle" id="dLabel-service" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/79d71721821e3a2b25ef65c451cbc336.png" alt="">
                      <p>Сервис</p>
                    </a>
                    <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-service">
                    <img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;">
                    <img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/3_rx5KrkC.png" hidefocus="true" style="bottom: -35px; right: -35px;">

                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/k1.png"><a href="/servis-kond/" class="disabled">Сервис систем кондиционирования</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vent_MjbipYS.png"><a href="/servis-vent/" class="disabled">Сервис систем вентиляции</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/a2_K8VaH7N.png"><a href="/servis-altenergy/" class="disabled">Сервис систем альтернативной энергетики</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/v11.png"><a href="/servis-vodopodgotovka/" class="disabled">Сервис систем водоочистки</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/1yvlaz.png"><a href="/servis-ochistitel/" class="disabled">Сервис очистителей и увлажнителей воздуха</a></li>
                    </ul>
                  </li>
                  <li id="primary-menu-solutions" class="primary-list dropdown">
                    <a href="/solutions/" class="menu-item disabled dropdown-toggle" id="dLabel-solutions" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/66400d90a118036c3260899ac548f74a.png" alt="">
                      <p>Типовые решения</p>
                    </a>
                    <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-solutions">
                    <img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;">

                    <img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/qio_GvX0whj.png" hidefocus="true" style="bottom: -35px; right: -35px;">

                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/proektirovanie_ventiliacii_bak_jjhy3py.png"><a href="/reshenije-kondicionirovanie/" class="disabled">Кондиционирование воздуха</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vent_b9cDPlY.png"><a href="/reshenije-ventiljacija/" class="disabled">Системы вентиляции</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/otoplenie.png"><a href="/reshenije-otoplenie/" class="disabled">Системы отопления</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/alternative.png"><a href="/reshenije-alternativa/" class="disabled">Альтернативная энергетика</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/basssein.png"><a href="/reshenije-osushenie/" class="disabled">Осушение воздуха и вентиляция бассейнов</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vodopodgotovka.png"><a href="/reshenie-vodopodgotovka/" class="disabled">Системы водоочистки</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vent_bak_bak.png"><a href="/reshenie-uvlazhnenie/" class="disabled">Системы увлажнения и очистки воздуха</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/energoeffektivnii_dom.png"><a href="/reshenie-passivny-dom/" class="disabled">Энергоэффективные пассивные дома</a></li>
                    </ul>
                  </li>
                  <li id="primary-menu-articles" class="primary-list dropdown">
                    <a href="/articles/" class="menu-item disabled menu-item-active dropdown-toggle" id="dLabel-articles" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/2fd4378d4ba58159344c9582fde06f31.png" alt="">
                      <p>Новости и статьи</p>
                    </a>
                    <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-articles"><img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;"><img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/st_3N6GPmE.png" hidefocus="true" style="bottom: -35px; right: -35px;">
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/sravnenie.png"><a href="/sravnenie-oborudovanija/" class="disabled">Сравнение продуктов и решений</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/obzor_bak.png"><a href="/opisanie-oborudovanija/" class="disabled">Обзор оборудования</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/soveti_qxl2W0J.png"><a href="/sovety-po-vyboru/" class="disabled">Советы по выбору</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/wiki.png"><a href="/wiki-stati/" class="disabled">Wiki-статьи</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/news_company.png"><a href="/novosti-kompanii/" class="disabled">Новости компаний и рынка</a></li>
                    </ul>
                  </li>
                  <li id="primary-menu-konsalting" class="primary-list dropdown">
                    <a href="/konsalting/" class="menu-item disabled dropdown-toggle" id="dLabel-konsalting" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/73f87224b52d5583ebe86eb37f358d9a.png" alt="">
                      <p>Консалтинг</p>
                    </a>
                    <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-konsalting"><img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;"><img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/profile.png" hidefocus="true" style="bottom: -35px; right: -35px;">
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/ingenernii_3.png"><a href="/services/konsalting/" class="disabled">Инженерный консалтинг</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/v_drygig_gorodax_1.png"><a href="/services/soprovojdenie/" class="disabled">Сопровождение проектов в городах Украины</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/alt_en_1.png"><a href="/services/konsalting-sistem-alternativnoy-energetiki/" class="disabled">Консалтинг систем альтернативной энергетики</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/konsalting_T1bF64M.png"><a href="/services/kompred/" class="disabled">Разработка коммерческих предложений под проект</a></li>
                      <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/konsyltacia_spec_1.png"><a href="/services/specialist-consulting/" class="disabled">Консультация инженера в области проектирования</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="navbar-collapse collapse col-md-12 header-item">
            <ul id="primary-menu" class="nav drop_menu margin-top-5 services-menu">
              <li id="primary-menu-proektirovanie" class="primary-list dropdown">
                <a href="/proektirovanie/" class="menu-item disabled dropdown-toggle" id="dLabel-proektirovanie" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/ad390ef64445ad5cab8011ee104e64ac.png" alt="">
                  <p>Проектирование</p>
                </a>
                <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-proektirovanie"><img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;"><img class="dropdown-pimary-img" src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;">
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vent_bak.png"><a href="/services/proektirovanie-ventiljacii/" class="disabled">Проектирование систем вентиляции</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/cond_2_YDSNHRt.png"><a href="/services/engineering-konditsionirovanie/" class="disabled">Проектирование систем кондиционирования</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/ot.png"><a href="/services/engineering-otoplenie/" class="disabled">Проектирование систем отопления</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/alten.png"><a href="/services/proektirovanie-sistem-alternativnoy-energetiki/" class="disabled">Проектирование систем альтернативной энергетики</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/bas1.png"><a href="/services/engineering-osushenie/" class="disabled">Проектирование систем осушения воздуха и вентиляции бассейнов</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/voda.png"><a href="/services/proektirovanie-sistem-vodoochistki/" class="disabled">Проектирование систем водоочистки</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/Untitled-1_e1SvqIQ.png"><a href="/services/sistema-tumanoobrazovaniya/" class="disabled">Проектирование систем туманообразования</a></li>
                </ul>
              </li>
              <li id="primary-menu-montazh" class="primary-list dropdown">
                <a href="/montazh/" class="menu-item disabled dropdown-toggle" id="dLabel-montazh" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/c2bf8b117b0e85804af60da83da6de68.png" alt="">
                  <p>Монтаж</p>
                </a>
                <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-montazh"><img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;"><img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/ventI_FkvBOgm.png" hidefocus="true" style="bottom: -35px; right: -35px;">
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/cond_Ym44E2e.png"><a href="/montazh-konditsionirovanija/" class="disabled">Монтаж систем кондиционирования</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/mont_vent.png"><a href="/montazh-vent/" class="disabled">Монтаж систем вентиляции</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/otoplenie1.png"><a href="/montazh-otoplenie/" class="disabled">Монтаж систем отопления</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/alt_en_E0VNlSf.png"><a href="/montazh-alter-energy/" class="disabled">Монтаж систем альтернативной энергетики</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/voda_lwoRSav.png"><a href="/montazh-vodoochistka/" class="disabled">Монтаж систем водоочистки</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/bassein_9P4cdRc.png"><a href="/montazh-sysytem-osush/" class="disabled">Монтаж систем осушения воздуха</a></li>
                </ul>
              </li>
              <li id="primary-menu-service" class="primary-list dropdown">
                <a href="/service/" class="menu-item disabled dropdown-toggle" id="dLabel-service" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/79d71721821e3a2b25ef65c451cbc336.png" alt="">
                  <p>Сервис</p>
                </a>
                <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-service"><img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;"><img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/3_rx5KrkC.png" hidefocus="true" style="bottom: -35px; right: -35px;">
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/k1.png"><a href="/servis-kond/" class="disabled">Сервис систем кондиционирования</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vent_MjbipYS.png"><a href="/servis-vent/" class="disabled">Сервис систем вентиляции</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/a2_K8VaH7N.png"><a href="/servis-altenergy/" class="disabled">Сервис систем альтернативной энергетики</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/v11.png"><a href="/servis-vodopodgotovka/" class="disabled">Сервис систем водоочистки</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/1yvlaz.png"><a href="/servis-ochistitel/" class="disabled">Сервис очистителей и увлажнителей воздуха</a></li>
                </ul>
              </li>
              <li id="primary-menu-solutions" class="primary-list dropdown">
                <a href="/solutions/" class="menu-item disabled dropdown-toggle" id="dLabel-solutions" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/66400d90a118036c3260899ac548f74a.png" alt="">
                  <p>Типовые решения</p>
                </a>
                <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-solutions"><img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;"><img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/qio_GvX0whj.png" hidefocus="true" style="bottom: -35px; right: -35px;">
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/proektirovanie_ventiliacii_bak_jjhy3py.png"><a href="/reshenije-kondicionirovanie/" class="disabled">Кондиционирование воздуха</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vent_b9cDPlY.png"><a href="/reshenije-ventiljacija/" class="disabled">Системы вентиляции</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/otoplenie.png"><a href="/reshenije-otoplenie/" class="disabled">Системы отопления</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/alternative.png"><a href="/reshenije-alternativa/" class="disabled">Альтернативная энергетика</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/basssein.png"><a href="/reshenije-osushenie/" class="disabled">Осушение воздуха и вентиляция бассейнов</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vodopodgotovka.png"><a href="/reshenie-vodopodgotovka/" class="disabled">Системы водоочистки</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/vent_bak_bak.png"><a href="/reshenie-uvlazhnenie/" class="disabled">Системы увлажнения и очистки воздуха</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/energoeffektivnii_dom.png"><a href="/reshenie-passivny-dom/" class="disabled">Энергоэффективные пассивные дома</a></li>
                </ul>
              </li>
              <li id="primary-menu-articles" class="primary-list dropdown">
                <a href="/articles/" class="menu-item disabled menu-item-active dropdown-toggle" id="dLabel-articles" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/2fd4378d4ba58159344c9582fde06f31.png" alt="">
                  <p>Новости и статьи</p>
                </a>
                <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-articles"><img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;"><img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/st_3N6GPmE.png" hidefocus="true" style="bottom: -35px; right: -35px;">
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/sravnenie.png"><a href="/sravnenie-oborudovanija/" class="disabled">Сравнение продуктов и решений</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/obzor_bak.png"><a href="/opisanie-oborudovanija/" class="disabled">Обзор оборудования</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/soveti_qxl2W0J.png"><a href="/sovety-po-vyboru/" class="disabled">Советы по выбору</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/wiki.png"><a href="/wiki-stati/" class="disabled">Wiki-статьи</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/news_company.png"><a href="/novosti-kompanii/" class="disabled">Новости компаний и рынка</a></li>
                </ul>
              </li>
              <li id="primary-menu-konsalting" class="primary-list dropdown">
                <a href="/konsalting/" class="menu-item disabled dropdown-toggle" id="dLabel-konsalting" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo get_template_directory_uri(); ?>/img/73f87224b52d5583ebe86eb37f358d9a.png" alt="">
                  <p>Консалтинг</p>
                </a>
                <ul class="dropdown-menu drop_submenu" aria-labelledby="dLabel-konsalting"><img class="dropdown-img" hidden src="assets/" hidefocus="true" style="bottom: -35px; right: -35px;"><img class="dropdown-pimary-img" src="<?php echo get_template_directory_uri(); ?>/img/profile.png" hidefocus="true" style="bottom: -35px; right: -35px;">
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/ingenernii_3.png"><a href="/services/konsalting/" class="disabled">Инженерный консалтинг</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/v_drygig_gorodax_1.png"><a href="/services/soprovojdenie/" class="disabled">Сопровождение проектов в городах Украины</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/alt_en_1.png"><a href="/services/konsalting-sistem-alternativnoy-energetiki/" class="disabled">Консалтинг систем альтернативной энергетики</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/konsalting_T1bF64M.png"><a href="/services/kompred/" class="disabled">Разработка коммерческих предложений под проект</a></li>
                  <li class="drop-list drop-list-item" data-img="https://alterair.ua/static/media/uploads/page/konsyltacia_spec_1.png"><a href="/services/specialist-consulting/" class="disabled">Консультация инженера в области проектирования</a></li>
                </ul>
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
