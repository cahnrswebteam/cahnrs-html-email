<table align="center"  cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
	<tr>
    	<td bgcolor="#363636">
        	<table class="email-wrapper" width="750" align="center"  cellpadding="0" cellspacing="0" style="border-collapse: collapse;table-layout:fixed;">
            	<tr class="header">
                	<td width="560" valign="top">
                    	<img src="<?php echo CAHNRSWPEMAILURL ;?>/theme-images/osg-header.jpg" alt="On Solid Ground" width="560" />
                    </td>
                    <td width="190" valign="top">
                    	<table width="170" align="left"  cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                            <tr class="social-area">
                                <td class="banner-text" bgcolor="#eab420" style="padding-left: 10px; padding-right: 10px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; color: #ffffff; text-transform: uppercase; text-align: center; padding-bottom: 15px; padding-top: 40px; font-size: 13px;">
                                    Agricultural and Natural Resource Science News
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td>
        	<table class="email-wrapper"  width="750" align="center"  cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
            	<tr class="nav">
                	<td style="padding-left: 20px; padding-top: 8px; padding-bottom: 8px; text-transform: uppercase; color: #999999; font-size: 12px;"><a style="text-transform: uppercase; color: #999999; font-size: 12px;" href="<?php the_permalink(); ?>">View Online</a> | <a style="text-transform: uppercase; color: #999999; font-size: 12px;" href="http://cahnrs.wsu.edu/blog/category/on-solid-ground/" >ARCHIVES</a> | <a style="text-transform: uppercase; color: #999999; font-size: 12px;" href="http://wsu.us5.list-manage.com/subscribe?u=3cd4b2a328519c34e51f46c1d&id=df0b077091">SUBSCRIBE</a></td>
                </tr>
                <tr class="content">
                	<td>
                    	<?php
							if ( have_posts() ) :
								while ( have_posts() ) :
									the_post();
									the_content();
								endwhile;
							endif;
						?>
                        <br />&nbsp;<br />&nbsp;<br />
                    </td>
                </tr>
                <tr class="content">
                	<td bgcolor="#cccccc" style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif; padding: 20px;font-size: 11px;"><p><strong>Enjoy all three monthly newsletters from CAHNRS!</strong></p>
                	  <p><strong>WSU&rsquo;s Green Times<br>
              	    </strong>Organic agriculture and sustainable food systems. <a style="color: #c37626" href="http://wsu.us5.list-manage2.com/subscribe?u=3cd4b2a328519c34e51f46c1d&id=114411b2ff">Subscribe.</a></p>
                	  <p><strong>WSU&rsquo;s On Solid Ground<br>
              	    </strong>Washington agriculture and natural resources. <a style="color: #c37626" href="http://wsu.us5.list-manage.com/subscribe?u=3cd4b2a328519c34e51f46c1d&id=df0b077091">Subscribe.</a></p>
                	  <p><strong>WSU&rsquo;s Voice of the Vine<br>
              	    </strong>Viticulture and enology for Washington&rsquo;s world-class wine industry. <a style="color: #c37626" href="http://wsu.us5.list-manage.com/subscribe?u=3cd4b2a328519c34e51f46c1d&id=a3e4964764">Subscribe.</a></p></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<td bgcolor="#363636">
        	<table class="email-wrapper"  width="750" align="center"  cellpadding="5" cellspacing="0" style="border-collapse: collapse;">
            	<tr class="footer">
                	<td style="font-size: 12px; color: #ffffff; text-align: center; font-family: 'Lucida Grande', 'Lucida Sans Unicode', Arial, san-serif;" >If you have comments or questions about a story, please <a style="color: #ffffff;" href="mailto:@wsu.edu">contact us</a>. Thank you for reading <a style="color: #c37626" href="http://cahnrs.wsu.edu/blog/category/on-solid-ground/" >On Solid Ground</a>.
                    	<br />CAHNRS Communications, Washington State University, Pullman, WA
                        <br /><span id="global-links"><a style="color: #999999" href="http://access.wsu.edu/" data-linkid="link-41">Accessibility</a> | <a style="color: #999999" href="http://copyright.wsu.edu/" data-linkid="link-42">Copyright</a> | <a style="color: #999999" href="http://policies.wsu.edu/" data-linkid="link-43">Policies</a></span></td>
                </tr>
            </table>
        </td>
    </tr>
</table>