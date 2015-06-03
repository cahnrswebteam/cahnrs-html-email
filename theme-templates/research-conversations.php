<table id="wrapper" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; font-family: 'Lucida Sans Unicode', 'Lucida Grande', arial, helvetica, sans-serif;">
	<tr>
		<td align="center" style="padding-bottom: 10px;">
			<table align="center" id="inner" width="700" border="0" cellspacing="0" cellpadding="0" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', arial, helvetica, sans-serif; width: 700px;">
				<tr>
					<td align="right" height="20" valign="bottom" width="700" style="color: #5e6a71; font-family: 'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; font-size: 10px; height: 20px; text-align: right; vertical-align: bottom; width: 700px;"><span style="padding: 0 20px;">Research Conversations | <a class="no-underline" href="<?php echo get_permalink(); ?>" style="color: #981e32; font-style: italic; outline: none; text-decoration: none;">View in browser &raquo;</a></span></td>
				</tr>
				<tr>
					<td align="left" class="banner" height="285" width="700" style="color: #981e32; font-size: 20px; height: 285px; text-align: left; width: 700px;">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/rc-cahnrs-logo.png" width="280" height="50" alt="WSU CAHNRS" style="display: block; height: 50px; width:280px;" />
						<img class="responsive-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/rc-header-text.png" width="700" height="85" alt="Research Conversations" style="display: block; height: 85px; max-width:700px; width:700px;" />
          	<img class="responsive-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/rc-header-images.jpg" width="700" height="150" alt="" style="display: block; height: 150px; max-width: 700px; width:700px;" />
					</td>
				</tr>
				<tr>
					<td align="left" width="700" style="border: 1px solid #b5babe; border-top: none; color: #5e6a71; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 14px; padding-top: 30px; text-align: left; width: 700px;">
					<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								the_content(); 
							}
						}
						?>
					</td>
				</tr>
				<tr>
					<td align="center" width="700" style="color: #5e6a71; font-family: 'Lucida Sans Unicode', 'Lucida Grande', arial, helvetica, sans-serif; font-size: 12px; text-align: center; width: 700px;"><br />
          	<span style="padding: 0 20px;"><a href="http://cahnrs.wsu.edu/research/" style="color: #981e32; outline: none; text-decoration: none;">CAHNRS Office of Research</a> | Hulbert Hall 403, PO Box 646240, Pullman, WA 99164-6240<br />
						phone: 509-335-4563 | fax: 509-335-6751 | <a href="mailto:agresearch@wsu.edu" style="color: #981e32; outline: none; text-decoration: none;">agresearch@wsu.edu</a></span><br />
						<br />
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>