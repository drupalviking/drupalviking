<?php include('switcher.tpl.php'); ?>

<div id="footer">
  <div class="wrap">
    <div class="content">
      <?php if($page["footer_column_1"]):?>
      <div class="footer-column">
        <?php print render($page["footer_column_1"]); ?>
      </div>
      <?php endif; ?>

      <?php if($page["footer_column_2"]):?>
      <div class="footer-column">
        <?php print render($page["footer_column_2"]); ?>
      </div>
      <?php endif; ?>

      <?php if($page["footer_column_3"]):?>
      <div class="footer-column column-last">
        <?php print render($page["footer_column_3"]); ?>
      </div>
      <?php endif; ?>
      <div class="cleared"></div>
    </div>
  </div>
</div><!-- End Footer -->
<div id="footer-bottom">
  <div class="wrap">
    <div id="footer-copyright">
     <?php $footer_copyright = theme_get_setting('footer_copyright_message', 'judy'); ?>
     <?php if(!empty($footer_copyright)) :?>
      <div class="footer-text"><?php print $footer_copyright;?></div>
    <?php endif; ?>
    </div>
    <?php if($page["bottom_bar_right"]):?>
    <div id="footer-right">
       <?php print render($page["bottom_bar_right"]); ?>
      <div class="cleared"></div>
    </div>
    <?php endif; ?>
    <div class="cleared"></div>
  </div>
</div>
<!-- End Footer Bottom -->
</div>
<!-- End Page -->