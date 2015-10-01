<?php

	$disable_switcher = theme_get_setting('judy_disable_switch', 'judy');

	if(empty($disable_switcher))

		$disable_switcher = 'on';

	if(!empty($disable_switcher) && $disable_switcher=='on'){

?>

<?php global $base_url;?>



<div id="style-selector">

	<div class="style-selector-wrapper"><span class="title"><?php print t('Choose Theme Options');?></span>

		<div>

			<br /><br />



			<span class="title-sub2"><?php print t('Predefined Color Skins');?></span>

			<ul class="styles" id="styles_switcher_color">

				<li><a href="#" title="Default" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/default.css'?>"><span class="pre-color-skin1"></span></a></li>

				<li><a href="#" title="Red" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/red.css'?>"><span class="pre-color-skin2"></span></a></li>

				<li><a href="#" title="Green" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/green.css'?>"><span class="pre-color-skin3"></span></a></li>

				<li><a href="#" title="Cyan" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/cyan.css'?>"><span class="pre-color-skin4"></span></a></li>

				<li><a href="#" title="Orange" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/orange.css'?>"><span class="pre-color-skin5"></span></a></li>

				<li><a href="#" title="Light Blue" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/lightblue.css'?>"><span class="pre-color-skin6"></span></a></li>

				<li><a href="#" title="Pink" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/pink.css'?>"><span class="pre-color-skin7"></span></a></li>

				<li><a href="#" title="Purple" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/purple.css'?>"><span class="pre-color-skin8"></span></a></li>

				<li><a href="#" title="Bridge" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/bridge.css'?>"><span class="pre-color-skin9"></span></a></li>

				<li><a href="#" title="Slate" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/slate.css'?>"><span class="pre-color-skin10"></span></a></li>

				<li><a href="#" title="Yellow" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/yellow.css'?>"><span class="pre-color-skin11"></span></a></li>

				<li><a href="#" title="Dark Red" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/darkred.css'?>"><span class="pre-color-skin12"></span></a></li>

				<li><a href="#" title="Dark Red" rel="<?php print $base_url.'/'.path_to_theme().'/css/color-scheme/blue.css'?>"><span class="pre-color-skin13"></span></a></li>



			</ul>

			<!-- end Predefined Color Skins -->

			<a href="#" class="close icon-chevron-right"></a></div>

	</div>

</div>

<!-- end style switcher -->

<script>

(function($) {

	$(document).ready(function(){





		$('ul#styles_switcher_color li a').click(function(){

			var rel = ($(this).attr('rel'));

			$('link[id="skin"]').attr('href',rel);

			return false;

		});





	});



})(this.jQuery);

</script>

<?php

	}

?>

