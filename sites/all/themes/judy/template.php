<?php

global $base_url;



function judy_preprocess_html(&$variables) {

	drupal_add_css('http://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2C400%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;ver=4.0', array('type' => 'external', 'media' => 'all'));

	drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2C400%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;ver=4.0', array('type' => 'external', 'media' => 'all'));

	drupal_add_css(base_path().path_to_theme().'/css/stylef9b8.css?ver=4.0', array('type' => 'external', 'media' => 'all'));

	drupal_add_css(base_path().path_to_theme().'/css/responsivef9b8.css?ver=4.0', array('type' => 'external', 'media' => 'all'));

	drupal_add_css(base_path().path_to_theme().'/css/color-scheme/default.css?ver=4.0', array('type' => 'external', 'media' => 'all'));

	drupal_add_css(base_path().path_to_theme().'/css/font-set/typographyf9b8.css?ver=4.0', array('type' => 'external', 'media' => 'all'));

	drupal_add_css(base_path().path_to_theme().'/js/flex-slider/flexsliderf9b8.css?ver=4.0', array('type' => 'external', 'media' => 'all'));

	drupal_add_css(base_path().path_to_theme().'/js/prettyPhoto/css/prettyPhotof9b8.css?ver=4.0', array('type' => 'external', 'media' => 'all'));

	drupal_add_css(base_path().path_to_theme().'/css/font-awesome/css/font-awesome.minf9b8.css?ver=4.0', array('type' => 'external', 'media' => 'all'));



	//Switcher color

	drupal_add_css(base_path().path_to_theme().'/js/style-switcher/color-switcher.css', array('type' => 'external', 'media' => 'all'));



	//jQuery

	drupal_add_js(base_path().path_to_theme().'/js/jquery/jquery90f9.js?ver=1.11.1', array('type' => 'file', 'scope' => 'header'));

	drupal_add_js(base_path().path_to_theme().'/js/jquery/jquery-migrate.min1576.js?ver=1.2.1', array('type' => 'file', 'scope' => 'header'));

	drupal_add_css(base_path().path_to_theme().'/css/update.css', array('type' => 'external', 'media' => 'all'));



	//JS FOOTER

	//jQuery UI

	drupal_add_js(base_path().path_to_theme().'/js/jquery/ui/jquery.ui.core.min2c18.js?ver=1.10.4', array('type' => 'file', 'scope' => 'footer'));

	drupal_add_js(base_path().path_to_theme().'/js/jquery/ui/jquery.ui.widget.min2c18.js?ver=1.10.4', array('type' => 'file', 'scope' => 'footer'));

	drupal_add_js(base_path().path_to_theme().'/js/jquery/ui/jquery.ui.accordion.min2c18.js?ver=1.10.4', array('type' => 'file', 'scope' => 'footer'));



	drupal_add_js(base_path().path_to_theme().'/js/scriptf9b8.js?ver=4.0', array('type' => 'file', 'scope' => 'footer'));

	//

	drupal_add_js(base_path().path_to_theme().'/js/jquery.easing.1.3f9b8.js?ver=4.0', array('type' => 'file', 'scope' => 'footer'));



	//Flex slider

	drupal_add_js(base_path().path_to_theme().'/js/flex-slider/jquery.flexslider-minf9b8.js?ver=4.0', array('type' => 'file', 'scope' => 'footer'));

	//Pretty photo

	drupal_add_js(base_path().path_to_theme().'/js/prettyPhoto/js/jquery.prettyPhotof9b8.js?ver=4.0', array('type' => 'file', 'scope' => 'footer'));

	//js switcher

	drupal_add_js(base_path().path_to_theme().'/js/style-switcher/styleselector.js', array('type' => 'file', 'scope' => 'footer'));



	drupal_add_js(base_path().path_to_theme().'/js/update.js', array('type' => 'file', 'scope' => 'footer'));



}



// Add css skin

$setting_skin = theme_get_setting('built_in_skins', 'judy');

if(!empty($setting_skin)){

	$skin_color = '/css/color-scheme/'.$setting_skin;

}else{

	$skin_color = '/css/color-scheme/default.css';

}

$css_skin = array(

	'#tag' => 'link', // The #tag is the html tag - <link />

	'#attributes' => array( // Set up an array of attributes inside the tag

	'href' => $base_url.'/'.path_to_theme().$skin_color,

	'rel' => 'stylesheet',

	'type' => 'text/css',

	'id' => 'skin',

	'data-baseurl'=>$base_url.'/'.path_to_theme()

	),

	'#weight' => 1,

);

drupal_add_html_head($css_skin, 'skin');



function judy_form_comment_form_alter(&$form, &$form_state) {

  $form['comment_body']['#after_build'][] = 'judy_customize_comment_form';

}



function judy_customize_comment_form(&$form) {

  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;

  return $form;

}



function judy_preprocess_page(&$vars) {



	if (isset($vars['node'])) {

		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;

	}

	if(isset($vars['node'])) {   //For node 4

    $vars['theme_hook_suggestions'][] =  'page__'.$vars['node']->nid;

   }



	//404 page

	$status = drupal_get_http_header("status");

	if($status == "404 Not Found") {

		$vars['theme_hook_suggestions'][] = 'page__404';

	}

	if (isset($vars['node'])) :

		//print $vars['node']->type;

        if($vars['node']->type == 'page'):



            $node = node_load($vars['node']->nid);

            $output = field_view_field('node', $node, 'field_show_page_title', array('label' => 'hidden'));

            $vars['field_show_page_title'] = $output;

			//sidebar

			$output = field_view_field('node', $node, 'field_sidebar', array('label' => 'hidden'));

            $vars['field_sidebar'] = $output;

        endif;

    endif;

}





// Remove superfish css files.

function judy_css_alter(&$css) {

	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);

	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);



//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);

}



function judy_form_alter(&$form, &$form_state, $form_id) {

	if ($form_id == 'search_block_form') {

		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty

		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield

		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");

		//disabled submit button

		//unset($form['actions']['submit']);

		unset($form['search_block_form']['#title']);

		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";

		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";

	}

	if($form_id == 'contact_site_form'){

		$form['mail']['#attributes']['class'] = array("input-contact-form");

		$form['name']['#attributes']['class'] = array("input-contact-form");

		$form['subject']['#attributes']['class'] = array("input-contact-form");

		$form['message']['#attributes']['class'] = array("message-contact-form");

		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button');

	}

	if ($form_id == 'comment_form') {

		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments

	}

}

function judy_textarea($variables) {

  $element = $variables['element'];

  $element['#attributes']['name'] = $element['#name'];

  $element['#attributes']['id'] = $element['#id'];

  $element['#attributes']['cols'] = $element['#cols'];

  $element['#attributes']['rows'] = $element['#rows'];

  _form_set_class($element, array('form-textarea'));



  $wrapper_attributes = array(

    'class' => array('form-textarea-wrapper'),

  );



  // Add resizable behavior.

  if (!empty($element['#resizable'])) {

    $wrapper_attributes['class'][] = 'resizable';

  }



  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';

  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';

  $output .= '</div>';

  return $output;

}

function judy_breadcrumb($variables) {

	$crumbs ='';

	$breadcrumb = $variables['breadcrumb'];

	if (!empty($breadcrumb)) {

		$crumbs .= '<div class="breadcrumb"><span class="crumbs">';

		foreach($breadcrumb as $value) {



			$crumbs .= '<span class="crust" typeof="v:Breadcrumb">'.$value.'  <span class="arrow"><span>&gt;</span></span></span>';

		}

		$crumbs .= '<span class="crust"><a><span>'.drupal_get_title().'</span></a><span class="arrow"><span></span></span></span>';

		$crumbs .= '</span></div>';

		return $crumbs;

	}else{

		return NULL;

	}

}

//custom main menu

function judy_menu_tree__main_menu(array $variables) {

	$str = '';



	if (preg_match("/\bsub-menu\b/i", $variables['tree'])){

       $str .= '<ul class="menu">' . $variables['tree']    . '</ul>';

      } else {

        $str .= '<ul class="sub-menu">' . $variables['tree'] . '</ul>';

      }



	return $str;

}



/**Override Menu theme */

function judy_links__system_main_menu(array $variables) {

       $html = "<ul class='menu'>";

    foreach ($variables['links'] as $link) {

        $html .= "<li>".l($link['title'], $link['path'], $link)."</li>";

    }

    $html .= "</ul>";

    return $html;

}



function judy_menu_tree__menu_top_menu($variables) {

	$str = '';

	$str .= '<ul id="menuhlng2">';

		$str .= $variables['tree'];

	$str .= '</ul>';



	return $str;

}

function hook_preprocess_page(&$variables) {

       if (arg(0) == 'node' && is_numeric($nid)) {

    if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {

      $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];

      if (empty($variables['node_content']['field_show_page_title'])) {

        $variables['node_content']['field_show_page_title'] = NULL;

      }

    }

  }

}

function theme_preprocess_page(&$variables, $hook) {

    $fid = theme_get_setting('judy_background');

    $variables['judy_background'] = file_create_url(file_load($fid)->uri);

}

