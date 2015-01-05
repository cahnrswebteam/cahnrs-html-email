<div style="background:#b5babe; font-family:'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; font-size:14px; margin:0; padding-top:20px; padding-bottom:20px; text-align:center; width:100%;">
  <div class="full-width container" style="background:#ffffff; text-align:center; margin-left:auto; margin-right:auto; padding-right:20px; padding-left:20px; width:700px;">
    <table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="700" class="full-width" style="border-collapse:collapse; width:700px;">
      <tr>
        <td width="700" class="full-width" style="color:#981e32; font-family:'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; font-size:20px; width:700px;">
          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/hd-newsletter-header.gif" alt="Human Development Update" width="700" height="182" style="display:block;" />
        </td>
      </tr>
      <tr>
        <td class="full-width" style="font-family:'Lucida Grande','Lucida Sans Unicode',Arial,san-serif;">
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
      <tr>
        <td bgcolor="#981e32" height="10" width="700" class="full-width" style="background:#981e32; height:10px; width:700px;"></td>
      </tr>
      <tr>
        <td width="700" class="full-width" style="width:700px;">
          <table width="700" border="0" cellspacing="0" cellpadding="0" class="full-width" style="border-collapse:collapse; width:700px;">
            <tr>
              <td align="left" valign="top" width="640" class="column" style="color:#5e6a71; font-family:'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; font-size:12px; padding-top:10px; padding-right:15px; padding-bottom:20px; padding-left:15px; text-align:left; vertical-align:top; width:640px;">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/hd-newsletter-logo.gif" width="310" height="77" alt="WSU Department of Human Development" style="max-width:310px;" /><br />
                <br />
                501 Johnson Tower<br />
                PO Box 644852, Washington State University, Pullman WA 99164-4852<br />
                509-335-8439 | <a href="mailto:H_D@wsu.edu" style="color:#5e6a71; text-decoration:none;">H_D@wsu.edu</a>
              </td>
              <!--<td align="left" valign="bottom" width="136" class="column share" style="color:#5e6a71; font-family:'Lucida Grande','Lucida Sans Unicode',Arial,san-serif; font-size:12px; padding-right:12px; padding-bottom:20px; padding-left:6px; text-align:left; vertical-align:bottom; width:136px;">
                <strong>Share this email:</strong><br />
                <br />
                <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/hd-newsletter-share-email.png" width="30" height="29" alt="Email" style="max-width:30px;" /></a>
                <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/hd-newsletter-share-twitter.png" width="30" height="29" alt="Twitter" style="max-width:30px;" /></a>
                <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/hd-newsletter-share-facebook.png" width="30" height="29" alt="Facebook" style="max-width:30px;" /></a>
                <a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/hd-newsletter-share-linkedin.png" width="30" height="29" alt="LinkedIn" style="max-width:30px;" /></a>
              </td>-->
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</div>