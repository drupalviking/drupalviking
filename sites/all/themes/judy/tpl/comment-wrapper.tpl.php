<?php if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>



<div id="comment-section">

  <div class="comment-number post-section-title">

    <span><?php print $content['#node']->comment_count.' '.t('Comments:');?></span>

  </div>

  <div id="comment-container">

    <ul>
      <?php  hide($content['links']);?> 
      <?php print render($content['comments']); ?>

    </ul>

  </div>

</div>



<div id="comment-form-1">

  <div id="respond" class="comment-respond">

    <h3 id="reply-title" class="comment-reply-title"><span><?php print t('Leave Your Comment');?></span></h3>

  <?php print str_replace('resizable', '', render($content['comment_form'])); ?>

  </div>

            <!-- #respond -->

</div>



<?php } ?>

<div class="cleared"></div>

