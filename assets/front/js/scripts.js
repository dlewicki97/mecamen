$( ".box" ).hover(
  	function() {
    	$('.content_box h1', this).addClass("box_hover_font");
    	$('.content_box p', this).addClass("box_hover_font");
    	$('.mask_box', this).addClass("mask_box_hover");
    	$('.border_box', this).addClass("border_box_hover");
  	}, function() {
    	$('.content_box h1', this).removeClass("box_hover_font");
    	$('.content_box p', this).removeClass("box_hover_font");
    	$('.mask_box', this).removeClass("mask_box_hover");
    	$('.border_box', this).removeClass("border_box_hover");
  	}
);