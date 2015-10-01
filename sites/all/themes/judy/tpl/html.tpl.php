<?php
/**
* @file html.tpl.php
* Default theme implementation to display the basic html structure of a single
* Drupal page.
*
* Variables:
* - $css: An array of CSS files for the current page.
* - $language: (object) The language the site is being displayed in.
*   $language->language contains its textual representation.
*   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
* - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
* - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
* - $head_title: A modified version of the page title, for use in the TITLE
*   tag.
* - $head_title_array: (array) An associative array containing the string parts
*   that were used to generate the $head_title variable, already prepared to be
*   output as TITLE tag. The key/value pairs may contain one or more of the
*   following, depending on conditions:
*   - title: The title of the current page, if any.
*   - name: The name of the site.
*   - slogan: The slogan of the site, if any, and if there is no title.
* - $head: Markup for the HEAD section (including meta tags, keyword tags, and
*   so on).
* - $styles: Style tags necessary to import all CSS files for the page.
* - $scripts: Script tags necessary to load the JavaScript files and settings
*   for the page.
* - $page_top: Initial markup from any modules that have altered the
*   page. This variable should always be output first, before all other dynamic
*   content.
* - $page: The rendered page content.
* - $page_bottom: Final closing markup from any modules that have altered the
*   page. This variable should always be output last, after all other dynamic
*   content.
* - $classes String of classes that can be used to style contextually through
*   CSS.
*
* @see template_preprocess()
* @see template_preprocess_html()
* @see template_process()
* @see nucleus_preprocess_html()
*/
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="<?php print $language->language; ?>" class="no-js">
  <!--<![endif]-->
	<head>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<title><?php print $head_title; ?></title>

		<?php print $styles; ?><?php print $scripts; ?><?php print $head; ?>
		<?php
			//Tracking code
			$tracking_code = theme_get_setting('general_setting_tracking_code', 'judy');
			print $tracking_code;
			//Custom css
			$custom_css = theme_get_setting('custom_css', 'judy');
			if(!empty($custom_css)):
		?>
		<style type="text/css" media="all">
			<?php print $custom_css;?>
		</style>
		<?php
			endif;
		?>

	</head>
	<body class="<?php print $classes;?>"  <?php print $attributes;?> >
    	<div id="background" >
			<div id="skip-link"><a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a></div>
			<?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>
		</div> <!-- End BackGround -->
	</body>
</html>