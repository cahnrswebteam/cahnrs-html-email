<?php wp_nonce_field('submit_email','email_nonce'); ?>
<div id="email-title-settings" >
    <h3>Current Email Title <span class="eg-info">Info Goes Here</span></h3>
    <input class="full" type="text" name="_email[title]" value="<?php echo $this->email_model->title;?>" id="email-setting-title" autocomplete="off">
</div>
<div id="email-theme-settings" >
    <h3>Select a Theme <span class="eg-info">Info Goes Here</span></h3>
    <div id="email-slide-wrap">
        <a id="email-setting-next" href="#" class="email-setting-nav"></a>
        <a id="email-setting-prev" href="#" class="email-setting-nav"></a>
        <div class="cycle-slideshow" 
            data-cycle-fx=carousel
            data-cycle-timeout=0
            data-cycle-carousel-visible=5
            data-cycle-prev="#email-setting-prev"
            data-cycle-next="#email-setting-next"
            data-cycle-carousel-fluid=true
            data-cycle-slides="> div"
            >
            <?php if( $this->email_model->theme && isset( $this->email_model->themes[ $this->email_model->theme ]  ) ){
				$ID = $this->email_model->theme;
				$theme = $this->email_model->themes[ $ID ];
				include CAHNRSWPEMAILDIR.'/inc/theme-slide.php'; 
			};?>
            <?php foreach( $this->email_model->themes as $ID => $theme ){
				if( $ID != $this->email_model->theme ){
                	include CAHNRSWPEMAILDIR.'/inc/theme-slide.php';
				}
			};?>
        </div>
    </div>
    <input style="display: none;" type="text" value="<?php echo $this->email_model->theme;?>" name="_email[theme]" id="email-theme-setting" />
</div>
<div id="email-campaign-settings" >
    <h3>Edit Campaign Settings ( <em>Optional</em> ) <span class="eg-info">Info Goes Here</span></h3>
    <label>Campaign Name: </label>
    <input type="text" value="<?php echo $this->email_model->campaign;?>" name="_email[campaign]" id="email-campaign-setting" />
    <label>Campaign Source: </label>
    <input type="text" value="<?php echo $this->email_model->source;?>" name="_email[source]" id="email-source-setting" />
</div>
<div id="email-image-settings" >
    <h3>Email Banner Image ( <em>Optional</em> ) <span class="eg-info">Info Goes Here</span></h3>
    <input class="full" type="text" name="_email[banner_img]" value="<?php if( $this->email_model->banner_img ) echo $this->email_model->banner_img;?>" id="email-banner-setting" /><br /><a href="#" style="margin-top: 0.5rem" class="wp-core-ui button-primary">Set Banner Image</a>
</div>
<div id="email-link-settings" >
    <h3>Link To Post ( <em>Optional</em> ) <span class="eg-info">Info Goes Here</span></h3>
    <input class="full" type="text" name="_email[link]" value="<?php if( $this->email_model->link ) echo $this->email_model->link;?>" id="email-link-setting" />
</div>