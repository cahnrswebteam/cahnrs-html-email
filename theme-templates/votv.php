<table border="0" cellpadding="0" cellspacing="0" width="100%" class="full-width" style="border-collapse:collapse; font-family:'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; width:100%;">
	<tr>
		<td bgcolor="#363637" height="190" width="100%" class="full-width" style="background-color:#363637; height:190px; width:100%;">
			<table align="center" border="0" cellspacing="0" cellpadding="0" height="190" width="750" class="full-width" style="width:750px;">
				<tr>
					<td height="190" valign="top" width="542" class="header full-width" style="color:#fff; vertical-align:top; width:542px;">
						<span id="cahnrs-logo" style="font-size:10px;"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/cahnrs-logo.png" width="319" height="75" alt="College of Agricultural, Human, and Natural Resource Sciences" style="height: 75px; max-width: 480px; width:319px;" /></span>
						<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/votv-header.png" width="542" height="115" alt="Voice of the Vine" style="font-size:24px; height:115px; width:542px;" />
					</td>
					<td bgcolor="#363637" height="190" valign="top" width="208" class="full-width" style="background-color:#363637; vertical-align:top; width:208px;">
						<div style="margin: 0 20px 20px 20px;">
							<table bgcolor="#b11730" border="0" cellspacing="0" cellpadding="0" height="170" width="100%" class="height-fix" style="background:#b11730; color:#fff; height:170px; width:100%;">
								<tr>
									<td align="center" id="social" style="padding:20px 20px 10px 20px; text-align:center;">
										<a href="http://twitter.com/wsucahnrs" title="Follow us on Twitter"><img align="center" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/votv-social-twitter.png" width="22" height="22" alt="Twitter" style="height:22px; height:22px; max-width:30px; width:22px; width:22px;" /></a>
										<a href="http://www.facebook.com/CAHNRS" title="Follow us on Facebook"><img align="center" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/votv-social-facebook.png" width="22" height="22" alt="Facebook" style="height:22px; max-width:30px; width:22px;" /></a>
										<a href="#" title="Follow us on Google +"><img align="center" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/votv-social-google.png" width="22" height="22" alt="Google +" style="height:22px; max-width:30px; width:22px;" /></a>
										<a href="http://www.youtube.com/WSUCAHNRS" title="Visit our YouTube channel"><img align="center" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/votv-social-youtube.png" width="22" height="22" alt="YouTube" style="height:22px; max-width:30px; width:22px;" /></a>
										<a href="http://cahnrs.wsu.edu/blog/category/voice-of-the-vine/feed" title="Subscribe to our RSS feed"><img align="center" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/votv-social-rss.png" width="22" height="22" alt="RSS" style="height:22px; max-width:30px; width:22px;" /></a>
									</td>
								</tr>
								<tr>
									<td align="center" valign="bottom" style="font-size:16px; line-height:20px; padding:10px 20px 20px 20px; text-align:center; text-transform:uppercase; vertical-align:bottom;">Viticulture and Enology News</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#FFFFFF" width="100%" class="full-width" style="background:#fff; width:100%;">
			<table align="center" border="0" cellspacing="0" cellpadding="0" width="756" class="full-width" style="width:756px;">
				<tr>
					<td class="shadow" width="1" style="background:#d2d5d7; border-left:1px solid #eff0f1; border-right:1px solid #b5babe; width:1px;"></td>
					<td class="full-width" width="750" style="color:#5e6a71; font-family:'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; width:750px;">
						<p id="issue-links" style="color:#a3a8ac; font-size:12px; margin:10px 20px; text-transform:uppercase;"><a href="<?php the_permalink(); ?>">View Online</a> | <a href="http://cahnrs.wsu.edu/blog/category/voice-of-the-vine/">Archives</a> | <a href="*|UPDATE_PROFILE|*">Manage Subscription</a></p>
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) :
									the_post();
									the_content();
								endwhile;
							endif;
						?>
					</td>
					<td class="shadow" width="1" style="background:#d2d5d7; border-left:1px solid #b5babe; border-right:1px solid #eff0f1; width:1px;"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#363637" width="100%" class="full-width" id="footer" style="background-color:#363637; font-size:13px; padding:10px 0 20px; text-align:center; width:100%;">
			<span style="color:#fff; margin-bottom:10px;">If you have comments or questions about a story, please <a href="#" style="color:#fff;">contact us</a>. Thank you for reading <a href="http://cahnrs.wsu.edu/blog/category/voice-of-the-vine/" style="border-bottom:none; color:#b11730; text-decoration:none;">Voice of the Vine</a>.</span>
			<span style="color:#b11730; margin-bottom: 3px;">CAHNRS Communications, Washington State University, Pullman, WA</span>
			<span id="global-links" style="color:#b5babe;"><a href="http://access.wsu.edu/">Accessibility</a> | <a href="http://copyright.wsu.edu/">Copyright</a> | <a href="http://policies.wsu.edu/">Policies</a></span>
		</td>
	</tr>
</table>