<table id="wrapper" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;">
	<tr>
		<td align="center" style="padding-bottom: 10px;">
			<table id="inner" width="700" border="0" cellspacing="0" cellpadding="0">
				<tr style="font-family: 'Lucida Sans Unicode','Lucida Grande',arial,helvetica,sans-serif;">
					<td align="right" height="20" valign="bottom" width="700" style="color: #5e6a71; font-family: 'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; font-size: 10px; height: 20px; text-align: right; vertical-align: bottom; width: 700px;"><span class="pad">Research Conversations | <a class="no-underline" href="<?php echo get_permalink(); ?>" style="font-style:italic;">View in browser &raquo;</a></span></td>
				</tr>
				<tr>
					<td class="banner" height="285" width="700" style="color: #981e32; font-size: 20px; height: 285px; width: 700px;">
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/rc-cahnrs-logo.png" width="280" height="50" alt="WSU CAHNRS" style="display: block; height: 50px; width:280px;" />
						<img class="responsive-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/rc-header-text.png" width="700" height="85" alt="Research Conversations" style="display: block; height: 85px; width:700px;" />
          	<img class="responsive-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/rc-header-images.jpg" width="700" height="150" alt="" style="display: block; height: 150px; width:700px;" />
					</td>
				</tr>
				<tr>
					<td width="700" style="border: 1px solid #b5babe; border-top: none; color: #5e6a71; font-family: 'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; font-size: 14px; padding-top: 30px; width: 700px;">
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
				<tr style="font-family: 'Lucida Sans Unicode','Lucida Grande',arial,helvetica,sans-serif;">
					<td align="center" width="700" style="color: #5e6a71; font-family: 'Lucida Sans Unicode','Lucida Grande',arial,helvetica,sans-serif; font-size: 12px; text-align: center; width: 700px;"><br />
          	<span class="pad"><a class="no-underline" href="http://cahnrs.wsu.edu/research/">CAHNRS Office of Research</a> | Hulbert Hall 403, PO Box 646240, Pullman, WA 99164-6240<br />
						phone: 509-335-4563 | fax: 509-335-6751 | <a class="no-underline" href="mailto:agresearch@wsu.edu">agresearch@wsu.edu</a></span><br />
						<br />
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>