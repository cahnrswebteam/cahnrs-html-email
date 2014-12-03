<table id="wrapper" bgcolor="#cccccc" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse">
	<tr><td>&nbsp;</td></tr>
    <tr><td align="center" style="padding-bottom: 10px;"><a href="<?php echo get_permalink( );?>">View In Browser</a></td></tr>
	<tr>
		<td>
        	<table bgcolor="#fffffff" class="email-wrapper" border="0" cellpadding="0" cellspacing="0" width="750" style="border-collapse:collapse" align="center">
            	<?php if( $CAHNRSWP_email->model->banner_img ):?>
            	<tr>
                	<td class="email-content">
                    	<img src="<?php echo $CAHNRSWP_email->model->banner_img;?>" width="750" />
                    </td>
                </tr>
                <?php endif;?>
                <tr>
                	<td class="email-content">
                    	<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								the_content(); 
							} // end while
						} // end if 
						?>
                    </td>
                </tr>
            </table>
        	
		  
		</td>
      
	</tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
</table>