<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td bgcolor="#363637">
      <!-- header -->
      <table align="center" bgcolor="#363637" border="0" cellpadding="0" cellspacing="0" width="750" class="full-width">
        <tr>
          <td height="190" valign="top" width="542" class="full-width" style="color: #fff;">
            <div id="logo" style="display: block;"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/votv-logo.png" width="195" height="75" alt="WSU Viticulture and Enology Program" style="display: block; font-size: 9px; height: 75px; max-width: 195px;" /></div>
            <img id="header" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/votv-header.png" width="542" height="115" alt="Voice of the Vine" style="display: block; font-size: 30px; height: 115px; max-width: 542px; width: 542px;" />
          </td>
          <td height="190" valign="top" width="208" class="full-width">
            <!-- social media/tagline -->
            <table align="center" bgcolor="#cc1232" border="0" cellspacing="0" cellpadding="20" height="170" width="168" id="social">
              <tr>
                <td width="50%" style="padding-bottom: 10px; padding-right: 0; text-align: center;">
                  <a href="https://www.facebook.com/wine.wsu.edu" title="Follow us on Facebook" style="color: #fff;"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/newsletter-social-facebook.png" width="35" height="35" alt="Follow us on Facebook" style="display: block; height: 35px; margin: 0 auto; max-width: 35px; width: 35px;" /></a>
                </td>
                <td width="50%" style="padding-bottom: 10px; padding-left: 0; text-align: center;">
                  <a href="http://cahnrs.wsu.edu/blog/category/voice-of-the-vine/feed" title="Subscribe to our RSS feed" style="color: #fff;"><img align="center" src="<?php bloginfo( 'stylesheet_directory' ); ?>/theme-images/newsletter-social-rss.png" width="35" height="35" alt="Subscribe to our RSS feed" style="display: block; height: 35px; margin: 0 auto; max-width: 35px; width: 35px;" /></a>
                </td>
              </tr>
              <tr>
                <td colspan="2" style="text-align: center;">
                  <span style="color: #fff; font-size: 16px; line-height: 20px;">VITICULTURE AND ENOLOGY NEWS</span>
                </td>
              </tr>
            </table>
            <!-- end social media/tagline -->
          </td>
        </tr>
      </table>
      <!-- end header -->
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
      <table align="center" width="756" border="0" cellspacing="0" cellpadding="0" id="content-container" class="full-width">
        <tr>
          <td bgcolor="#EFF0F1" width="1" class="shadow"></td>
          <td bgcolor="#D2D5D7" width="1" class="shadow"></td>
          <td bgcolor="#B5BABE" width="1" class="shadow"></td>
          <td width="750" class="full-width">
            <table align="center" border="0" cellspacing="0" width="750" class="full-width">
              <tr>
                <td style="color: #a3a8ad; font-size: 12px; padding: 10px 20px 15px 20px;">
                  <a href="<?php the_permalink(); ?>" style="color: #a3a8ac; outline: none; text-decoration: none;">VIEW ONLINE</a> | <a href="http://cahnrs.wsu.edu/blog/category/voice-of-the-vine/" style="color: #a3a8ac; outline: none; text-decoration: none;">ARCHIVES</a> | <a href="*|UPDATE_PROFILE|*" style="color: #a3a8ac; outline: none; text-decoration: none;">MANAGE SUBSCRIPTION</a>
                </td>
              </tr>
              <tr>
                <td style="padding: 0;">
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
                <td bgcolor="#d7dadb" style="border-top: 1px solid #b5babe; padding: 0;">
									<table border="0" cellspacing="0" width="750" class="full-width">
  									<tr>
    									<td style="color: #464e54; font-size: 12px; padding: 20px;">
                        <strong>Enjoy all three monthly newsletters from CAHNRS!</strong><br />
                        <br />
                        <strong>WSU's Green Times</strong><br />
                        Organic agriculture and sustainable food systems. <a href="http://wsu.us5.list-manage2.com/subscribe?u=3cd4b2a328519c34e51f46c1d&id=114411b2ff" style="color: #981e32; outline: none; text-decoration: none;">Subscribe here &raquo;</a><br />
                        <br />
                        <strong>WSU's On Solid Ground</strong><br />
                        Washington agriculture and natural resources. <a href="http://wsu.us5.list-manage.com/subscribe?u=3cd4b2a328519c34e51f46c1d&id=df0b077091" style="color: #981e32; outline: none; text-decoration: none;">Subscribe here &raquo;</a><br />
                        <br />
                       <strong>WSU's Voice of the Vine</strong><br />
                       Viticulture and enology for Washington's world-class wine industry. <a href="http://wsu.us5.list-manage.com/subscribe?u=3cd4b2a328519c34e51f46c1d&id=a3e4964764" style="color: #981e32; outline: none; text-decoration: none;">Subscribe here &raquo;</a>
											</td>
										</tr>
									</table>
                </td>
              </tr>
            </table>
          </td>
          <td bgcolor="#B5BABE" width="1" class="shadow"></td>
          <td bgcolor="#D2D5D7" width="1" class="shadow"></td>
          <td bgcolor="#EFF0F1" width="1" class="shadow"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td bgcolor="#363637">
      <!-- footer -->
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="750" class="full-width">
        <tr>
          <td style="color: #fff; font-size: 12px; padding: 20px; text-align: center;">
             If you have comments or questions about a story, please <a href="mailto:erika.holmes@wsu.edu" style="color: #cc1232; outline: none; text-decoration: none;">contact us</a>. Thank you for reading <a href="http://cahnrs.wsu.edu/blog/category/voice-of-the-vine/" style="color: #cc1232; outline: none; text-decoration: none;">Voice of the Vine</a>.<br />
              <br />
              <span style="color: #b5babe; font-size: 12px; line-height: 22px;">CAHNRS Communications, Washington State University, Pullman, WA<br />
              <a href="http://access.wsu.edu/" style="color: #b5babe; outline: none; text-decoration: none;">Accessibility</a> | <a href="http://copyright.wsu.edu/" style="color: #b5babe; outline: none; text-decoration: none;">Copyright</a> | <a href="http://policies.wsu.edu/" style="color: #b5babe; outline: none; text-decoration: none;">Policies</a></span>
          </td>
        </tr>
      </table>
      <!-- end footer -->
    </td>
  </tr>
</table>