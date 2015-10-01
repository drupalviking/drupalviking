<?php
$flickr_id = $settings['widget_flickr_id'];
$flickr_photos_count = $settings['widget_flickr_photo_count'];
?>
<div id="flickr_badge_wrapper">
</div>

<script language="javascript">
jQuery(document).ready(function(){
	/*----------------------------------------------------*/
	/*	Flickr Feed
	/*----------------------------------------------------*/
	jQuery('#flickr_badge_wrapper').jflickrfeed({
		limit: <?php print $flickr_photos_count; ?>,
		qstrings: {
			id: '<?php print $flickr_id; ?>'
		},
		itemTemplate: '<a title="{{title}}" href="{{image}}"><img src="{{image_s}}" alt="{{title}}" width="75" height="75"></a>'
	});
});
</script>