<?php

$out = '';

if ($block->region == 'sidebar_second' || $block->region == 'sidebar_first') {

	$out .= '<div id="block-'.$block->module .'-'. $block->delta.'" class="sidebar-widget '.$classes.' '.$block->css_class.'" '.$attributes.' >';

	$out .= render($title_suffix);

	if ($block->subject )

		$out .= '<div class="sidebar-widget-title" '.$title_attributes.'>'.$block->subject.'</div>';

	$out .= '<div class="sidebar-widget-content content">';

	$out .= $content;

	$out .= '</div>';

	$out .= '</div>';


}elseif($block->region == 'description_content_contact'){

	$out .= '<div class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h2>'.$block->subject.'</h2>';

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'top_bar_left'){

	$out .= '<div class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	if ($block->subject)

		$out .= '<h4 '.$title_attributes.'>'.$block->subject.'</h4>';

	$out .= $content;

	$out .= '</div>';



}elseif($block->region == 'footer_column_1' || $block->region == 'footer_column_2' || $block->region == 'footer_column_3'){

	$out .= '<div class="footer-widget '.$classes.' '.$block->css_class.'" '.$attributes.' >';

	$out .= render($title_suffix);

    $out .= '<div class="footer-widget-content content">';

   if ($block->subject)

		$out .= '<div class="footer-widget-title">'.$block->subject.'</div>';

	$out .= $content;

	$out .= '</div></div>';





}else{

	$out .= '<div id="'.$block_html_id.'" class="'.$classes.'" '.$attributes.'>';

	$out .= render($title_suffix);

	$out .= $content;

	$out .= '</div>';

}

print $out;

?>