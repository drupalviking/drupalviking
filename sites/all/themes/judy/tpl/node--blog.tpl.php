<?php

/**

 * @file

 * Default theme implementation to display a node.

 */

global $base_root, $base_url;

if($node->type=='blog'){

	$style = 'large'; //image style

	if($node->field_image){

	$imageone = $node->field_image['und'][0]['uri'];

	}else{

	$imageone = '';

	}



if(!$page){

  $node_url = $base_root.$node_url;



	if(!empty($node->field_post_type['und'][0]['value']))

			$post_type_a = $node->field_post_type['und'][0]['value'];

    // Get value blog type

    $blog_type = $node->field_blog_type['und'][0]['value'];

  if($blog_type == 0){ //Blog type Standard - Default

  ?>

  <div class="post-entry">

    <div class="post type-post <?php print $classes; ?>" <?php print $attributes; ?>>

      <div class="post-entry-media">

        <a href="<?php print $node_url; ?>" title="<?php print $title;?>"><?php print theme('image', array('path' => $imageone, 'attributes'=>array('class'=>'attachment-post-thumbnail', 'alt'=>$title)));?></a>

      </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?url=<?php print $node_url; ?>&amp;media=<?php print file_create_url($imageone); ?>" ><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

      
               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                print render($content);

              ?>

          </div>

          <div class="cleared"></div>

        </div>

        <div class="post-entry-bottom"><a class="post-entry-button" href="<?php print $node_url; ?>" ><span><?php print t('Read More') ?> <i class="fa fa-long-arrow-right"></i></span></a><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span></div>

      </div>

    </div>



  <?php

  } elseif ($blog_type == 1) { //Blog type Slider ?>



    <div class="post-entry">

    <div class="post type-post <?php print $classes; ?>" <?php print $attributes; ?>>

      <div class="post-entry-media">

        <div class="post-flexslider">

          <div class="flexslider" id="flexslider-post-<?php print $node->nid; ?>">

            <ul class="slides">

              <?php

              $image_style_name = 'blog_780x350';



              foreach($node->field_image['und'] as $key => $value){

              $image_uri  = $node->field_image['und'][$key]['uri'];

              $image = theme('image_style', array('style_name' => $image_style_name, 'path' => $image_uri));

              $output = image_style_url($image_style_name, $image_uri);

              print '<li><img alt="'.$title.'" src="'.$output.'" /></li>';

              }

              ?>



            </ul>

          </div>

        </div>

      </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?url=<?php print $node_url; ?>&amp;media=<?php print file_create_url($imageone); ?>" ><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                print render($content);

              ?>


          </div>

          <div class="cleared"></div>

        </div>

        <div class="post-entry-bottom"><a class="post-entry-button" href="<?php print $node_url; ?>" ><span><?php print t('Read More') ?> <i class="fa fa-long-arrow-right"></i></span></a><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span></div>

      </div>

    </div>



<?php }

  elseif($blog_type == 2){ //Blog type Video?>



  <div class="post-entry">

    <div>

      <div class="post-entry-media">

        <div class="youtube-container">

          <?php print $node->field_code_html['und'][0]['value']; ?>

        </div>

      </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?url=<?php print $node_url; ?>" ><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

    
               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                hide($content['field_code_html']);

                hide($content['field_blog_type']);

                print render($content);

              ?>


          </div>

          <div class="cleared"></div>

        </div>

        <div class="post-entry-bottom"><a class="post-entry-button" href="<?php print $node_url; ?>" ><span><?php print t('Read More') ?> <i class="fa fa-long-arrow-right"></i></span></a><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span></div>

      </div>

    </div>



 <?php }

  elseif($blog_type == 3){ //Blog type Cloud Sound?>



  <div class="post-entry">

    <div>

      <div class="post-entry-media">



        <?php print $node->field_code_html['und'][0]['value']; ?>



      </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?source_url=<?php print $node_url; ?>" ><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">


               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                hide($content['field_code_html']);

                hide($content['field_blog_type']);

                print render($content);

              ?>


          </div>

          <div class="cleared"></div>

        </div>

        <div class="post-entry-bottom"><a class="post-entry-button" href="<?php print $node_url; ?>" ><span><?php print t('Read More') ?> <i class="fa fa-long-arrow-right"></i></span></a><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span></div>

      </div>

    </div>



 <?php }

  elseif($blog_type == 4){ //Blog Type Location Map?>



  <div class="post-entry">

    <div>

      <div class="post-entry-map">

        <div class="post-map-container">

          <?php print $node->field_code_html['und'][0]['value']; ?>

        </div>

      </div>

    </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?source_url=<?php print $node_url; ?>" ><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

      
               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                hide($content['field_code_html']);

                hide($content['field_blog_type']);

                print render($content);

              ?>



          </div>

          <div class="cleared"></div>

        </div>

        <div class="post-entry-bottom"><a class="post-entry-button" href="<?php print $node_url; ?>" ><span><?php print t('Read More') ?> <i class="fa fa-long-arrow-right"></i></span></a><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span></div>

      </div>



 <?php }


} else {

	if(!empty($node->field_post_type['und'][0]['value']))

			$post_type_a = $node->field_post_type['und'][0]['value'];

 $blog_type = $node->field_blog_type['und'][0]['value'];

  if($blog_type == 0){

  ?>

  <div class="post-entry-single">

    <div class="post type-post <?php print $classes; ?>" <?php print $attributes; ?>>

      <div class="post-entry-media">

        <a href="<?php print $node_url; ?>" title="<?php print $title;?>"><?php print theme('image', array('path' => $imageone, 'attributes'=>array('class'=>'attachment-post-thumbnail', 'alt'=>$title)));?></a>

      </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?source_url=<?php print $node_url; ?>"><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_image']);

                hide($content['field_categories']);

                hide($content['field_tags']);

                print render($content);

              ?>

          </div>

          <div class="cleared"></div>

          <div class="post-entry-tags"><?php print render($content['field_tags']); ?></div>

        </div>

        <div class="post-entry-bottom"><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span>

          <div class="cleared"></div>

        </div>

      </div>

    </div>



  <?php

  } elseif ($blog_type == 1) { ?>



  <div class="post-entry-single">

    <div class="post type-post <?php print $classes; ?>" <?php print $attributes; ?>>

      <div class="post-entry-media">

        <div class="post-flexslider">

          <div class="flexslider flexslider-post">

            <ul class="slides">

              <?php

              $image_style_name = 'blog_780x350';



              foreach($node->field_image['und'] as $key => $value){

              $image_uri  = $node->field_image['und'][$key]['uri'];

              $image = theme('image_style', array('style_name' => $image_style_name, 'path' => $image_uri));

              $output = image_style_url($image_style_name, $image_uri);

              print '<li><img alt="'.$title.'" src="'.$output.'" /></li>';

              }

              ?>



            </ul>

          </div>

        </div>

      </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?source_url=<?php print $node_url; ?>"><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

            <p>

               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                print render($content);

              ?>

            </p>

          </div>

          <div class="cleared"></div>

          <div class="post-entry-tags"><?php print render($content['field_tags']); ?></div>

        </div>

        <div class="post-entry-bottom"><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span>

          <div class="cleared"></div>

        </div>

      </div>

    </div> <!-- End Post Entry -->



<?php }

  elseif($blog_type == 2){ ?>



  <div class="post-entry-single">

    <div class="post type-post <?php print $classes; ?>" <?php print $attributes; ?>>

      <div class="post-entry-media">

        <div class="youtube-container">

          <?php print $node->field_code_html['und'][0]['value']; ?>

        </div>

      </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?source_url=<?php print $node_url; ?>"><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                hide($content['field_code_html']);

                hide($content['field_blog_type']);

                print render($content);

              ?>

          </div>

          <div class="cleared"></div>

          <div class="post-entry-tags"><?php print render($content['field_tags']); ?></div>

        </div>

        <div class="post-entry-bottom"><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span>

        <div class="cleared"></div>

        </div>

      </div>

    </div>



 <?php }

  elseif($blog_type == 3){ ?>



  <div class="post-entry-single">

    <div class="post type-post <?php print $classes; ?>" <?php print $attributes; ?>>

      <div class="post-entry-media">



        <?php print $node->field_code_html['und'][0]['value']; ?>



      </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?source_url=<?php print $node_url; ?>"><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

            <p>

               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                hide($content['field_code_html']);

                hide($content['field_blog_type']);

                print render($content);

              ?>

            </p>

          </div>

          <div class="cleared"></div>

          <div class="post-entry-tags"><?php print render($content['field_tags']); ?></div>

        </div>

        <div class="post-entry-bottom"><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span>

          <div class="cleared"></div>

        </div>

      </div>

    </div>



 <?php }

  elseif($blog_type == 4){ ?>



  <div class="post-entry-single">

    <div class="post type-post <?php print $classes; ?>" <?php print $attributes; ?>>

      <div class="post-entry-map">

        <div class="post-map-container">

          <?php print $node->field_code_html['und'][0]['value']; ?>

        </div>

      </div>

    </div>

      <div class="post-entry-body">

        <div class="post-entry-top">

          <div class="post-entry-top-left"><i class="fa fa-folder-open-o"></i><?php print render($content['field_categories']); ?></div>

          <div class="post-entry-top-right">

            <span class="comment-count"><i class="fa fa-comment-o"></i> <?php print $comment_count; ?> </span><span class="share-button"><i class="fa fa-share-square-o"></i><?php print t('Share') ?><span class="share-button-container"><span class="share-button-arrow"></span><a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $node_url; ?>"><i class="fa fa-facebook"></i></a><a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?url=<?php print $node_url; ?>&amp;original_referer=<?php print $node_url; ?>" ><i class="fa fa-twitter"></i></a><a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php print $node_url; ?>" ><i class="fa fa-google-plus"></i></a><a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?url=<?php print $node_url; ?>"><i class="fa fa-pinterest"></i></a></span></span>

          </div>

            <div class="cleared"></div>

          </div>

          <h1 class="post-entry-title"><a href="<?php print $node_url; ?>"><?php print $title;?></a></h1>

          <div class="post-entry-content content">

               <?php

                hide($content['comments']);

                hide($content['links']);

                hide($content['field_tags']);

                hide($content['field_image']);

                hide($content['field_categories']);

                hide($content['field_code_html']);

                hide($content['field_blog_type']);

                print render($content);

              ?>


          </div>

          <div class="cleared"></div>

          <div class="post-entry-tags"><?php print render($content['field_tags']); ?></div>

        </div>

        <div class="post-entry-bottom"><span class="post-entry-author"><i class="fa fa-user"></i><?php print strip_tags($name)?></span><span class="post-entry-date"><i class="fa fa-calendar"></i><span class="post-entry-meta-text"><?php print format_date($node->created, 'custom', 'M d,Y');?></span></span>

          <div class="cleared"></div>

        </div>

      </div>


  <?php



}

	$nids = db_query("SELECT n.nid, title FROM {node} n WHERE n.status = 1 AND n.type = :type AND n.nid <> :nid ORDER BY RAND() LIMIT 0,4", array(':type' => 'blog', ':nid' => $node->nid))->fetchCol();

	$nodes = node_load_multiple($nids);

	if (!empty($nodes)):

?>

  <div class="post-relative">

    <div class="post-section-title">

      <?php print t('Related Posts');?>

    </div>

    <div class="post-relative-content">

        <?php $i = 0; ?>

        <?php foreach ($nodes as $node) :

					$i++;

          $last = "";

          if ($i == 3) $last = "column-last";

					if($i == 4) break;

				?>

        <?php $field_image = field_get_items('node', $node, 'field_image'); ?>

        <div class="post-relative-column <?php print $last ?>">

          <div class="post-relative-thumb">

            <a  href="<?php print url('node/' . $node->nid);?>">

              <?php if(!empty($field_image)) {?>

              <?php print theme('image', array('style_name' => 'blog_210X126', 'path' => $field_image[0]['uri'], 'attributes'=>array('class'=>'attachment-post-thumbnail', 'alt'=>$title, 'width'=>210, 'height'=>126))); ?>

              <?php } else {

                print '<img src="'.$base_url.'/sites/default/files/No_Image.png" alt="No image" />';

              } ?>

            </a>

          </div>

          <div class="post-relative-title"><a href="<?php print url('node/' . $node->nid);?>"><i class="icon-angle-right"></i> <?php print $node->title; ?></a>

          </div>

        </div>

        <?php

					endforeach;

				?>

        <div class="cleared"></div>

    </div>

    <div class="cleared"></div>

  </div> <!-- End Post relative-->

  <?php

	endif;



?>

  <?php print render($content['comments']);?>

<!-- End main content -->

<?php

}



} else{



}

?>