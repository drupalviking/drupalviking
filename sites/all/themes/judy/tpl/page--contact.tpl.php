<?php include ('header.tpl.php') ?>
	<div id="body" >
    <div class="wrap">
      <div class="full-column">
          <div class="page-entry">
            <div class="page-entry-body">
              <h1 class="page-title"><?php print drupal_get_title() ; ?></h1>
                <?php
                  if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
                  print render($tabs);
                  endif;
                ?>
              <div class="page-entry-content content">
                <?php  if($page['maps_contact_page']):?>
                <div class="full-column maps-contact">
                  <?php print render($page['maps_contact_page']) ?>
                </div>
                <?php endif; ?>

        
                <?php  if($page['description_content_contact']):?>
                <div class="column column1_2" style="margin-top:20px;">
                  <?php print render($page['description_content_contact']) ?>
                </div>
                <?php endif; ?>

                <?php  if($page['form_contact']):?>
                <div class="column column1_2 column-last">
                  <?php print render($page['form_contact']) ?>
                </div>
                <?php endif; ?>

              </div><!-- End content contact -->
              <div class="cleared"></div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <?php include ('footer.tpl.php') ?>