<div class="email-theme<?php if( $ID == $this->email_model->theme ) echo ' email-theme-active';?>" data-theme="<?php echo $ID;?>" data-supports="<?php echo implode( ',', $this->email_model->supports );?>">
    <img src="<?php echo $this->email_model->dir;?>/images/<?php echo $ID;?>.jpg"/>
    <div class="email-caption"><?php echo $theme['name'];?></div>
</div>