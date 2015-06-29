<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td bgcolor="#000000">
			<table align="center" border="0" cellpadding="0" cellspacing="0" width="750" class="full-width">
				<tr>
					<td bgcolor="#000000" valign="top" width="750" class="full-width" style="font-family: Lucida Grande, Lucida Sans Unicode, Arial, san-serif; font-size: 14px;">
						<a href="http://sfs.wsu.edu/" style="color: #fff; font-family: Lucida Grande, Lucida Sans Unicode, Arial, san-serif; text-decoration: none; outline: none;" title="School of Food Science UI WSU"><img src="<?php echo $CAHNRSWP_email->model->banner_img; ?>" width="750" alt="School of Food Science Update" style="display: block; font-family: Lucida Grande, Lucida Sans Unicode, Arial, san-serif; font-size: 20px; max-width: 750px; width: 750px;" /></a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#000000">
			<table align="center" bgcolor="#FFFFFF" width="750" border="0" cellspacing="0" cellpadding="0" class="full-width">
				<tr>
					<td style="font-family: Lucida Grande, Lucida Sans Unicode, Arial, san-serif; font-size: 14px;">
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) :
									the_post();
									the_content();
								endwhile;
							endif;
						?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#000000">
			<table align="center" bgcolor="#000000" border="0" cellspacing="0" cellpadding="20" width="750" class="full-width">
				<tr>
					<td style="color: #fff; font-family: Lucida Grande, Lucida Sans Unicode, Arial, san-serif; font-size: 10px; text-align: center;">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/sfs-wsu-logo.png" width="170" height="104" alt="Washington State University" style="color: #fff; display: block; height: 104px; margin: 0 auto; max-width: 170px; width: 170px;" />
					</td>
					<td style="color: #b39c6c; font-family: Lucida Grande, Lucida Sans Unicode, Arial, san-serif; font-size: 10px; text-align: center;">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/sfs-ui-logo.png" width="170" height="104" alt="University of Idaho" style="color: #b39c6c; display: block; height: 104px; margin: 0 auto; max-width: 170px; width: 170px;" />
					</td>
				</tr>
				<tr>
					<td colspan="2" style="color: #b5babe; font-family: Lucida Grande, Lucida Sans Unicode, Arial, san-serif; font-size: 12px; text-align: center;">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/sfs-fb-icon.png" width="20" height="20" alt="FB" style="height: 20px; margin-right: 5px; max-width: 20px; width: 20px; vertical-align: text-bottom;" /> Stay Connected: <a href="https://www.facebook.com/SchoolofFoodScienceUIWSU" style="color: #c60c30; font-weight: normal; outline: none; text-decoration: none;">School of Food Science UI WSU</a><br />
            <br />
            If you have any questions, comments, or suggestions, <a href="http://sfs.wsu.edu/about-us/contact-us/" style="color: #c60c30; font-weight: normal; outline: none; text-decoration: none;">please contact us</a>.<br />
            <br />
            School of Food Science<br />
            WSU - Pullman, WA, 509-335-3843 | UI - Moscow, ID, 208-885-0707<br />
            <a href="http://access.wsu.edu/" style="color: #b5babd; font-weight: normal; outline: none; text-decoration: none;">Accessibility</a> | <a href="http://copyright.wsu.edu/" style="color: #b5babd; font-weight: normal; outline: none; text-decoration: none;">Copyright</a> | <a href="http://policies.wsu.edu/" style="color: #b5babd; font-weight: normal; outline: none; text-decoration: none;">Policies</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>