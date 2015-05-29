<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#000" style="background-color: #000; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; width: 100%;">
  <tr>
    <td align="center">
    	<table align="center" bgcolor="#363637" width="750" border="0" cellspacing="0" cellpadding="0" class="full-width" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif;">
        <tr>
          <td height="145" class="full-width" style="color: #fff; height: 145px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 14px;">
          	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/sfs-internal-header.gif" width="750" height="145" alt="School of Food Science" style="display: block; height: 145px; width: 750px;" />
          </td>
        </tr>
        <tr>
          <td height="138" class="full-width" style="color: #fff; height: 138px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 18px;">
          	<img src="<?php echo $CAHNRSWP_email->model->banner_img; ?>" width="750" height="138" alt="Student Update" border="0" style="display: block; height: 138px; max-width: 750px; width: 750px;" />
          </td>
        </tr>
        <tr>
          <td height="6" class="full-width" style="height: 6px;">
          	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/sfs-internal-sub.gif" width="750" height="6" alt="" border="0" style="display: block; height: 6px; width: 750px;" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="center">
			<table align="center" width="750" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" class="full-width">
  			<tr>
    			<td align="center" style="padding: 10px;">
          	<span style="color: #5e6a71; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 15px; text-transform: uppercase;">A weekly e-mail for Internal announcements at the UI/WSU School of Food Science</span><br />
            <span style="display: block; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 14px; margin-top: 5px; text-transform: uppercase;"><a href="#" style="color: #981e32; outline: none; text-decoration: none;">Archive</a></span>
          </td>
  			</tr>
  			<tr>
    			<td style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 14px; text-align: left;">
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
    <td align="center">
			<table align="center" bgcolor="#363637" width="750" border="0" cellspacing="0" cellpadding="0" class="full-width">
  			<tr>
    			<td align="center" style="padding: 0 20px 30px 20px;">
          	<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif;">
  						<tr>
    						<td align="center" width="50%" style="color: #fff; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 10px; padding: 20px 10px; text-align: center;"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/sfs-wsu-logo.png" width="170" height="104" alt="Washington State University" style="display: block; height: 104px; margin: 0 auto; max-width: 170px; width: 170px;" /></td>
    						<td align="center" width="50%" style="color: #b39c6c; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 10px; padding: 20px 10px; text-align: center;"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/sfs-ui-logo.png" width="168" height="68" alt="University of Idaho" style="display: block; height: 68px; margin: 0 auto; max-width: 168px; width: 168px;" /></td>
  						</tr>
						</table>
            <br />
            <br />
            <span style="color: #b5babe; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; font-size: 12px;"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/sfs-fb-icon.png" width="20" height="20" alt="FB" style="height: 20px; margin-right: 5px; max-width: 20px; width: 20px; vertical-align: text-bottom;" /> Stay Connected: <a href="https://www.facebook.com/SchoolofFoodScienceUIWSU" style="color: #d7b258; font-weight: bold; outline: none; text-decoration: none;">The Official School Of Food Science Page</a><br />
            <br />
            If you have any questions, comments, or suggestions, <a href="http://sfs.wsu.edu/about-us/contact-us/" style="color: #d7b258; font-weight: bold; outline: none; text-decoration: none;">please contact us</a>.<br />
            <br />
            School of Food Science<br />
            WSU - Pullman, WA, 509-335-3843 | UI - Moscow, ID, 208-885-0707<br />
            <a href="http://access.wsu.edu/" style="color: #b5babe; outline: none; text-decoration: none;">Accessibility</a> | <a href="http://copyright.wsu.edu/" style="color: #b5babe; outline: none; text-decoration: none;">Copyright</a> | <a href="http://policies.wsu.edu/" style="color: #b5babe; outline: none; text-decoration: none;">Policies</a></span>
          </td>
  			</tr>
			</table>
    </td>
  </tr>
</table>