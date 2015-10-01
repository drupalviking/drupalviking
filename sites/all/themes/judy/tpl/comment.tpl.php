<li>

  <div class="comment-entry" >

    <div class="comment-entry-left" >

      <div class="comment-avatar">

        <?php if($picture){

          print $picture;

        }

        ?>

      </div>

      <div class="comment-author"> <?php print strip_tags(theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url')))) ?> </div>

    </div>

    <div class="comment-entry-right" >

      <div class="comment-entry-right-inner">

        <div class="comment-date"><i class="fa fa-calendar"></i><?php print format_date($content['comment_body']['#object']->created, 'custom', 'M d, Y H:i A');?></div>

        <div class="comment-reply"><i class="fa fa-mail-forward"></i><?php print render($content['links']) ?> </div>

        <div class="comment-content content">

          <?php hide($content['links']); print render($content) ?>

        </div>

      </div>

    </div>

    <div class="cleared"></div>

  </div> <!-- End Comment entry-->

</li>