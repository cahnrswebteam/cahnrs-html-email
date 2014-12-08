<?php 
	global $CAHNRSWP_email;
	$CAHNRSWP_email->controller->set_email( $post->ID );
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php the_title();?></title>
<style type="text/css">
	<?php include CAHNRSWPEMAILDIR.'/theme-css/'.$CAHNRSWP_email->model->theme_style.'.php';?>
</style>
<?php wp_head();?>
<script>
var cahnrs_campaign = '<?php echo $CAHNRSWP_email->model->campaign ;?>';
var cahnrs_source = '<?php echo $CAHNRSWP_email->model->title ;?>';
</script>
</head>

<body>
<?php if( is_user_logged_in() && current_user_can( 'edit_posts' ) ):?>
	<?php include CAHNRSWPEMAILDIR.'/inc/admin-bar.php';?>
<?php endif;?>
<div id="email-content">
	<?php include CAHNRSWPEMAILDIR.'/theme-templates/'.$CAHNRSWP_email->model->theme_template.'.php';?>
</div>
<?php wp_footer();?>
</body>
</html>