<div id="email-admin-bar">
	<div id="email-fields">
    	<label>Send To: </label>
    	<input type="text" id="email-email" / >
        <textarea id="email-code" ></textarea>
    </div>
    <nav id="email-nav">
    	<a href="#" class="code" >Get Code</a><a href="#"  class="draft" >Send Draft</a><a href="#" class="final" >Send Final</a>
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
	$('#email-admin-bar nav a.code' ).click( function(){
		alert('Sorry, still working on this!');
	});  
});
</script>