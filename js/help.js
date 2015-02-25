var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

jQuery(document).ready(function($){

	$('#email-help').on('click', '.help-item', function( event ){
		event.preventDefault();
		var div = $('#email-help').find( '.' + $(this).data('baseid') );
		if ( div.length > 0 ) {
			toggle_lightbox();
			div.addClass('active-lb');
		}
	});

	$('#email-help .half').on('click', 'a', function( event ){
		event.preventDefault();
		pause_videos();
		var container = $(this).parent('.half').parent('.help-content');
		if ( $(this).hasClass('next') ) {
			container.removeClass('active-lb').next('.help-content').addClass('active-lb');
		} else if ( $(this).hasClass('previous') ) {
			container.removeClass('active-lb').prev('.help-content').addClass('active-lb');
		}
	});

	$('body').on('click' ,'.help-lb-bg', function(){
		toggle_lightbox();
	});

	$('#email-help').on('click', '.close-help', function( event ){
		event.preventDefault();
		toggle_lightbox();
	});

	toggle_lightbox = function(){
		if ( $('.help-lb-bg').length > 0 ) {
			$('.active-lb').removeClass('active-lb');
			$('.help-lb-bg').remove();
			pause_videos();
		} else {
			$('body').append( '<div class="help-lb-bg"></div>' );
		}
	}

	pause_videos = function(){
		$(players).each(function(i){
			this.pauseVideo();
		});
	}

});