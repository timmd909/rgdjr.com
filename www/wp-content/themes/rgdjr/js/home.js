jQuery(document).ready(function($) {
	$(window).on('resize', resizeThumbnails);
	$('.letter img').on('load', resizeThumbnails);
});


function resizeThumbnails()
{
	jQuery('.letter').each(function(index, element) {
		var letterAspect = jQuery(element).width() / (0.0+jQuery(element).height());
		
		var imageElement = jQuery(element).children('img');
		
		if (!jQuery(imageElement).size() == 1) {
			// alert('no image, skipping '+index);
			return;
		}
		
		var imageAspect = jQuery(imageElement).width() /
			(0.0+jQuery(imageElement).height());
		
		if (imageAspect < letterAspect) {
			jQuery(element).addClass('portrait').removeClass('landscape');
		} else {
			jQuery(element).addClass('landscape').removeClass('portrait');
		}
	});
	
}