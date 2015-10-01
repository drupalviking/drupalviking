<div id="main-menu-toggle">
  <?php  if($page['top_menu_mobie']):?>
  <div class="toggle-menu-top"><span class="toggle-menu-close"><i class="fa fa-angle-left"></i></span></div>
  <div class="menu-main-menu-container">
    <?php print render($page['top_menu_mobie']) ?>
  </div>
  <?php endif; ?>
</div> <!-- End menu mobie -->
<div id="back_top"><i class="fa fa-angle-up"></i></div>
<div id="page" >
  <div id="header">
    <div id="topbar">
      <div class="wrap">
        <div id="toggle-menu-button"><i class="fa fa-align-justify"></i></div>
        <div class="main-menu">
          <?php  if($page['top_bar_left']):?>
          <div class="menu-main-menu-container">
            <?php print render($page['top_bar_left']) ?>
          </div>
          <?php endif; ?>
          <div class="cleared"></div>
        </div>
        <!-- End Main Menu -->
        <?php  if($page['top_bar_right']):?>
        <div class="top-social">
          <?php print render($page['top_bar_right']) ?>
          <div class="cleared"></div>
        </div>
        <?php endif; ?>
        <div class="cleared"></div>
      </div>
    </div>
    <div class="wrap">
      <div class="logo-box">
        <?php
        if (theme_get_setting('text_logo', 'judy')){?>
        <h1><a class="logo-text" href="<?php print check_url($front_page); ?>"> <?php print theme_get_setting('text_logo', 'judy'); ?> </a></h1>
        <?php }
        elseif($logo){
        ?>
        <h1><a class="logo-text" href="<?php print check_url($front_page); ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a></h1>
        <?php }?>
        <?php if ($site_slogan){ ?>
        <span class="logo-tagline"><?php print $site_slogan; ?></span>
        <?php } ?>
      </div>
      <div class="cleared"></div>
    </div>
  </div>
  <!-- End Header -->