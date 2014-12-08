<div id="email-admin-bar" class="cahnrs-lb-content-parent">
	<div id="email-fields">
    	<label>Send To: </label>
    	<input type="text" id="email-email" / >
        <span class="cahnrs-lb-content" title="Get Code" style="display: none">
        	<h3>Email Header</h3>
        	<textarea id="email-header" >
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title><?php the_title();?></title><meta name="viewport" content="width=device-width, initial-scale=1.0"/></head><style>
				<?php include CAHNRSWPEMAILDIR.'/theme-css/blank-white.php'; ?>
                </style><body bgcolor="#cccccc" style="background-color: #cccccc; font-family: Verdana,sans-serif; font-size: 12px;">
            </textarea>
            <h3>Email Content</h3>
        	<textarea id="email-code" ></textarea>
            <h4>Email Footer</h4>
            <textarea id="email-footer" ></body></html></textarea>
        </span>
    </div>
    <nav id="email-nav">
    	<a href="#" class="code show-lightbox-content" >Get Code</a><a href="#"  class="draft" >Send Draft</a><a href="#" class="final" >Send Final</a>
    </nav>
</div>
<script type="text/javascript">
jQuery(document).ready( function( $ ) {
	$('#email-admin-bar nav a.draft, #email-admin-bar nav a.final' ).click( function(){
		var email = $( '#email-code' ).val();
		var type = $( this ).attr( 'class' );
		var address = $( '#email-email' ).val();
		var service_url = '<?php echo get_site_url();?>/?send-email=true';
		$.post( service_url, { em: email , ty: type , st: address } , function( data ) {
				alert( data );
			});
	});
	//$('#email-admin-bar nav a.code' ).click( function(){
		//alert('Sorry, still working on this!');
	//});  
});
</script>
<script>
/**
 * @desc Checks to see if there is an existing instance of cahnrs_lb before
 * creating a new one.
*/
if( typeof cahnrs_lb == 'undefined' ) {
	
	function init_cahnrs_lb() {
		
		this.content_parent = '.cahnrs-lb-content-parent';
		
		this.content_wrap = '.cahnrs-lb-content';
		
		var self = this;
		
		/**
		 * @desc Handles all of the functions requiring the dom to be loaded as
		 * well as all of the events.
		*/
		jQuery( document ).ready( function( $ ) {
			
			$( 'body' ).on( 'click' , '.show-lightbox-content' , function( e ) {
				
				if( $( this ).is( 'a' ) ) e.preventDefault(); // Stop default action for link
				
				var content = self.get_click_content( $( this )  );
				
				self.show_lb( content , false );
				
			}); // end on click .show-lightbox-content 
			
			
		}); // end document ready
		
		/**
		 * @desc Gets the content from a click/interacted item. 
		 *
		 * @param item_interacted object DOM object that was clicked/interacted with
		 * 
		 * @return object The DOM ojbect containing the content
		*/ 
		self.get_click_content = function( item_interacted ){
			
			var content = item_interacted.parents( self.content_parent ).find( self.content_wrap );
			
			return content;
			
		}; //end set_lb_content()
		
		
		/**
		 * @desc Initiates display of the lightbox
		 *
		 * @param object/string content_item The content or DOM object containing the content
		 * @param string title The title used for the dialog box. A value of false will cause it
		 * to look for a the title attribute on content_item. An empty string will be returned in
		 * the case of content_item being a string.
		*/
		self.show_lb = function( content_item , title ){
			
			var content_type = jQuery.type( content_item );
			
			if( content_type === 'string' ) {
				
				content = content_item;
				
				if( !title ) {
					
					title = '';
					
				}; // end if
				
			} else {
				
				content_item.wrapInner( '<div class="cahnrs-dialog-content"></div>' )
				
				content = content_item.find( '.cahnrs-dialog-content');
				
				if( !title ) {
					
					title = content_item.attr( 'title' );
					
					if( 'undefined' === title ) {
					
						title = '';
						
					}; // end if
					
				}; // end if
				
			}; // end if
			
			
			
			jQuery( content ).dialog({
				modal: true,
				width: 700,
				title: title,
				buttons: {
					Close: function() {
						
						/*if( content_type !== 'string' ){
							
							content_parent.find( self.content_wrap ).append( jQuery( this ).children() );
							
						}; // end if
						
						jQuery( this ).dialog( "close" );
						
						jQuery(this).dialog('destroy').remove();*/
						
						jQuery( this ).dialog( "close" );
						
				  	}
				},
				close: function(){ 
				
					self.close_lb( content_item , content_type , jQuery( this ) ) 
				
				}
			}); // end .dialog*/
			
		} // end show_lb
		
		self.close_lb = function( content_item , content_type , lightbox ){
		
			var content_parent = content_item.parent();
			
			if( content_type !== 'string' ){
								
				content_parent.find( self.content_wrap ).append( lightbox.children() );
								
			}; // end if
							
			lightbox.dialog( "close" );
							
			lightbox.dialog('destroy').remove();
			
		}
		
	} // end init_cahnrs_lb
	
	
	
	var cahnrs_lb = new init_cahnrs_lb();
	
} // end if cahnrs_lb
</script>