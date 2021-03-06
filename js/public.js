jQuery(document).ready( function($){
	
	function init_html_builder(){
		this.hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f");
		var s = this;
		
		s.configure_email = function(){
			var c = this;
			
			c.encode_campaign = function( text ){
				
				console.log( text );
				
				text = text.replace( / /g , '-' );
				text = text.replace( /\%20/g , '-' );
				text = text.replace( /\'/g , '' );
				text = text.replace( /\"/g , '' );
				text = text.toLowerCase();
				text = encodeURIComponent( text );
				
				return text;
				
			}
			
			c.add_tracking = function(){
				var campaign = ( typeof cahnrs_campaign !== 'undefined' )? cahnrs_campaign : 'cahnrs-campaign';
				var source = ( typeof cahnrs_source !== 'undefined' )? cahnrs_source : campagin;
				var medium = 'email';
				
				$( 'a' ).each( function( index ){
					
					var href = $( this ).attr('href');
					
					if( typeof href !== 'undefined' ) {
					
						if( '#' != href && href.indexOf('utm_campaign') == -1 && href.indexOf('mailto:') == -1 ){
							
							
							if( href.indexOf('wsu.edu') > -1 ){
								
								var date = new Date();
								
								var query = new Array();
								query.push( 'utm_campaign=' + c.encode_campaign( campaign ) );
								query.push( 'utm_source=' + c.encode_campaign( source + '-' + date.getFullYear() + '-' + date.getDate() ) );
								query.push( 'utm_medium=' + c.encode_campaign( medium ) );
								query.push( 'utm_content=link-' +  index ); 
								
								var url = href.split('?');
								
								if( url.length > 1 ){
									
									$( this ).attr('href' , url[0] + '?' + url[1] + '&' + query.join('&') )
									
								} else {
									
									$( this ).attr('href' , url[0] + '?' + query.join('&') )
									
								}
								
								$( this ).attr( 'data-linkid' , 'link-' + index );
								
							}; // end if
							
						}; // end if 
						
					}; // end if typeof
					
				}); // end each
				
			};
			
			c.inilne_css = function(){
				var tags = 'tr,td,h1,h2,h3,h4,h5,tr,td,table,p,ul,li,span,a,div';
				tags = tags.split(',');
				var css = 'padding-top,padding-bottom,padding-left,padding-right,font-size,color,font-family,background-color,display,border-bottom,border-top,border-left,border-right,table-layout'
				var css = css.split(',');
				for( var i = 0; i < tags.length; i++ ){
					$( tags[i] ).each( function(){
						for( var r = 0; r < css.length; r++ ){
							
							var c_css = $(this).css( css[r] ); 
							  
							switch( css[r] ){
								
								case 'color':
								
									c_css = s.rgb2hex( c_css );
									
									var style = $(this).attr('style');
									
									
									$(this).attr('style', css[r]+':'+c_css+';'+style );
									
									break;
								
								case 'background-color':
								
									if( c_css.indexOf( 'rgba' ) < 0 && 'transparent' != c_css ) {
									
										c_css = s.rgb2hex( c_css );
										
										$( this ).attr( 'bgcolor' , c_css ) ;
									
									}
									
									break;
								case 'font-size':
									
									//var base_size = $('body').css('font-size').replace( 'px' , '' );
									
									//var c_size = c_css.replace( 'px' , '' )
									
									//c_css = ( ( c_size / base_size ) * 100 ) + '%';
									
									$( this ).css( css[r] , c_css );
									
									break;
									
								default: 
								
									$( this ).css( css[r] , c_css );
									
									break;
									
							}
							/*if( 'color' == css[r] ) {
								c_css = s.rgb2hex( c_css );
								var style = $(this).attr('style');
								
								$(this).attr('style', css[r]+':'+c_css+';'+style );
								
								//alert( c_css );
							} else if( 'background-color' == css[r] ) {
								
								if( c_css.indexOf( 'rgba' ) < 0 && 'transparent' != c_css ) {
									
									c_css = s.rgb2hex( c_css );
									
									
									$( this ).css( css[r] , c_css );
									
								}
								
							} else {
								 
								$( this ).css( css[r] , c_css );
								
							}*/
						}
					});
				}
			}
			
			c.set_column_width = function(){
				$('.column').each( function(){
					var row_width = $(this).parents('.row').first().outerWidth();
					var width = $(this).outerWidth();
					var n_width = ( ( width / row_width ) * 100 ).toFixed(2);
					$( this ).css( 'width' , n_width + '%' );
				});
			}
			
			c.set_row_width = function(){
				$('.row').each( function(){
					var row_width = $(this).parent().first().outerWidth();
					var width = $(this).outerWidth();
					var n_width = ( ( width / row_width ) * 100 ).toFixed(2);
					$( this ).css( 'width' , n_width + '%' );
				});
			}
			
			c.set_item_width = function(){
				
				$('.item').each( function(){
					
					$( this ).css( 'width' , '100%' );
					
				});
				
			}
			
			c.fix_img_align = function(){
				var align = $('body').find('.alignright, .alignleft');
				align.each( function(){
					var align = ( $( this ).hasClass( 'alignleft' ) )? 'left' : 'right';
					
					var img = ( $( this ).is( 'img') )? $( this ) : $( this ).find('img');
					img.attr('align', align );
					img.attr('hspace', 15 );
					img.attr('vspace', 15 );
					//img.attr('border', 15 );
					//img.css('border-color','#ffffff');
					/*if( 'left' == align ) {
						img.css('border-right','15px solid #ffffff');
						
					} else {
						img.css('border-left','15px solid #ffffff');
					}
					img.css('border-bottom','15px solid #ffffff');*/
					var n_img = img.clone()
					$( this ).after( n_img );
					$( this ).remove();
				});
			}
			
			c.set_img_size = function(){
			$('body').find('img').each( function(){
				var w = $( this ).width();
				var p_w = $( this ).parents('.item').width();
				if( ( w / p_w ) > 0.9 ){
					$( this ).attr('width' , p_w );
					$( this ).removeAttr('height');
				}
			});
		}
			
			c.add_tracking();
			c.inilne_css();
			c.set_column_width();
			c.set_row_width();
			c.set_item_width();
			c.fix_img_align();
			c.set_img_size();
		}
		
		s.rgb2hex = function(rgb) {
		   	rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
		   	return "#" + s.hex(rgb[1]) + s.hex(rgb[2]) + s.hex(rgb[3]);
		}
		
		s.hex = function(x) {
  			return isNaN(x) ? "00" : s.hexDigits[(x - x % 16) / 16] + s.hexDigits[x % 16];
 		}
		
		s.load_code = function(){
			var email = $('#email-content').html();
			$('#email-code').html( email );
			//$('#email-code').html( email );
		}
		
		s.configure_email();
		
		if( $('#email-code').length > 0 ) s.load_code();
	}
	
	var html_builder = new init_html_builder();
	});