<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- site全体 -->
  <div class="l-site" id="page-top">

    <!-- ページトップ -->
    <div class="c-pagetop" id="c-pagetop">
      <a href="#page-top"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon_top.png" alt=""></a>
    </div>



    <header>

      <div class="l-container">

        <div class="l-header-wrap">

          <!-- ヘッダー左側 -->
          <div class="l-header-left">
            <!-- サイトロゴ -->
            <div class="l-header-branding">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo_header.png" alt="">

              </a>
            </div>

          </div><!-- /l-header-left -->




          <!-- ヘッダー右側 -->
          <div class="l-header-right">

            <!-- PC Menu -->
            <div class="l-nav-wrap">
              <nav class="c-nav-main">
                <?php if (has_nav_menu('navigation')) : ?>
                  <?php wp_nav_menu(array(
                    'theme_location' => 'navigation'
                  ));
                  ?>
                <?php endif; ?>
              </nav>
            </div>

          </div><!-- /l-header-right -->


          <!-- SP Menu Button -->
          <div class="c-nav-sp_button-wrap" id="c-nav-sp_button-wrap">
            <div class="c-nav_sp-button js-toggle-button">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="c-nav_sp-button-text">MENU</div>
          </div>
          <!-- /SP Menu Button -->

          <!-- SP Menu -->
          <div class="c-nav-sp_main">
            <nav>
              <?php if (has_nav_menu('navigation')) : ?>
                <?php wp_nav_menu(array(
                  'theme_location' => 'navigation'
                ));
                ?>
              <?php endif; ?>
            </nav>

          </div>
          <!-- /SP Menu -->



        </div><!-- /l-header-wrap -->

      </div><!-- /container -->

    </header>