jQuery(document).ready( function($) {
	 function init_email(){
		this.editor = $('#email-settings');
		this.themes = $('#email-theme-settings .email-theme');
		var self = this;
		
		self.themes.hover( 
			function(){ $( this ).css('opacity' , 1 ) },
			function(){ if( !$( this ).hasClass('email-theme-active') ) $( this ).css('opacity' , 0.5 ) }
			);
		self.themes.click( function(){
			$(this).addClass('email-theme-active').siblings().removeClass('email-theme-active').css('opacity' , 0.5 );
			$( '#email-theme-setting').val( $(this).data('theme') );
			
		});
		self.editor.on('change', '#email-setting-title' , function(){
			self.editor.find('#email-source-setting').val( $('#email-setting-title').val() );
			});
		
		self.MEDIAmedia_library = function() {
		   var formfield = null;
	  
		   var wireframe;
	  
		   $('body').on('click', '#email-image-settings  a ',function(e) {
			   e.preventDefault();
			   if (wireframe) {
				   wireframe.open();
				   return;
			   }
	  
			   wireframe = wp.media.frames.wireframe = wp.media({
				   title: 'Insert Banner',
				   button: {
					   text: 'Media Library Button Title'
				   },
				   multiple: false
			   });
	  
			   wireframe.on('select', function() {
				   attachment = wireframe.state().get('selection').first().toJSON();
				   console.log(attachment);
				   $('#email-banner-setting').val(attachment.url);
			   });
	  
			   wireframe.open();
		   });
		}
		
		self.MEDIAmedia_library();
	}
	var email = new init_email();
	
});