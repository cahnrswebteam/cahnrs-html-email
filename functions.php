<?php namespace cahnrswp\html;

class init_html_email{
	public $model;
	public $controller;
	public $view;
	
	public function __construct(){
		
		define( 'CAHNRSWPEMAILURL' , \get_stylesheet_directory_uri() ); // PLUGIN BASE URL
		define( 'CAHNRSWPEMAILDIR' , \get_stylesheet_directory() ); // DIRECTORY PATH 
		
		$this->model = new email_model;
		$this->controller = new email_controller( $this->model );
		$this->view = new email_view( $this->controller , $this->model );
		
		\add_action( 'admin_menu', array( $this , 'remove_default_menu' ) );
		
		\add_action( 'init', array( $this, 'register_post_type' ) );
		
		\add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ), 1 );
		
		\add_action( 'admin_enqueue_scripts', array( $this , 'add_admin_scripts' ) );
		
		\add_action( 'wp_enqueue_scripts', array( $this , 'add_public_scripts' ) );
		
		\add_action( 'save_post', array( $this, 'save' ) );
		
		\add_filter( 'the_content', array( $this , 'import_content' ), 1 );
		
		\add_filter( 'template_include', array( $this , 'send_email' ), 99 );
		
		//\add_filter( 'the_title', array( $this , 'set_title' ), 1 );
		
		
		
	}
	
	public function send_email( $template ){
		if( isset( $_GET['send-email'] ) && $_GET['send-email'] ) return CAHNRSWPEMAILDIR.'/templates/send-mail.php';
		return $template;
	}
	
	public function import_content( $content ){
		global $post;
		if( 'email' != $post->post_type ) return $content;
		$this->controller->set_email( $post->ID );
		if( !$this->model->link ) return $content;
		$imp_post = \file_get_contents( $this->model->link.'?rest-ext=true' );
		if( !$imp_post ) return $content;
		$imp_post = @json_decode( $imp_post , true );
		if( !$imp_post ) return $content;
		if( isset( $imp_post['content'] ) ){
			return $imp_post['content'];
		} else {
			return $content;
		}
	}
	
	public function set_title( $title ){
		global $post;
		if( 'email' != $post->post_type ) return $title;
		$this->controller->set_email( $post->ID );
		if( $this->model->title ) return $this->model->title;
		return $title;
	}
	
	public function save( $post_id ){
		$this->controller->save_meta( $post_id );
	}
	
	public function add_meta_box( $post_type ){
		add_meta_box(
			'email-settings'
			,__( 'Email Settings' )
			,array( $this, 'add_metabox_content' )
			,'email'
			,'normal'
			,'high'
		);
	}
	
	public function add_metabox_content( $post ){
		$this->controller->set_email( $post->ID );
		$this->view->output_editor();
	}
	
	public function add_admin_scripts(){
		\wp_enqueue_style( 'email-admin-css', \get_stylesheet_directory_uri().'/css/admin.css', array(), '0.0.1'  );
		\wp_enqueue_script( 'email-admin-js', \get_stylesheet_directory_uri().'/js/admin.js', array(), '0.0.1'  );
		\wp_enqueue_script( 'cycle2', \get_stylesheet_directory_uri().'/js/cycle2.js', array(), '0.0.1'  );
	}
	
	public function add_public_scripts(){
		\wp_enqueue_style( 'style', \get_stylesheet_directory_uri().'/style.css', array(), '0.0.1'  );
		\wp_enqueue_style( 'jQuery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css', array(), '0.0.1'  );
		\wp_enqueue_script( 'email-js', \get_stylesheet_directory_uri().'/js/public.js', array(), '0.0.1'  );
		\wp_enqueue_script( 'jQuery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js', array(), '0.0.1'  );
	}
	
	public function remove_default_menu(){
		
		\remove_menu_page( 'edit.php' );
		\remove_menu_page( 'edit.php?post_type=page' );
		\remove_menu_page( 'edit-comments.php' );
		
	}
	
	public function register_post_type(){
		
		$labels = array(
			'name'               => _x( 'HTML Email', 'post type general name'),
			'singular_name'      => _x( 'HTML Email', 'post type singular name'),
			'menu_name'          => _x( 'HTML Email', 'admin menu'),
			'name_admin_bar'     => _x( 'Email', 'add new on admin bar'),
			'add_new'            => _x( 'Add New', 'HTML Email'),
			'add_new_item'       => __( 'Add New HTML Email'),
			'new_item'           => __( 'New HTML Email'),
			'edit_item'          => __( 'Edit HTML Email'),
			'view_item'          => __( 'View HTML Email'),
			'all_items'          => __( 'All HTML Emails'),
			'search_items'       => __( 'Search HTML Emails'),
			'parent_item_colon'  => __( 'Parent HTML Emails:'),
			'not_found'          => __( 'No HTML Email found.'),
			'not_found_in_trash' => __( 'No HTML Email found in Trash.')
		);
		$args = array(
			'public' => true,
			'labels'  => $labels,
		);
    	register_post_type( 'email', $args );
	}
}

class email_model{
	public $themes = array(
		'blank-white' => array('name' => 'Blank White' , 'supports' => array( 'banner' ) ),
		'cahnrs-news' => array('name' => 'CAHNRS News' ),
		'hd' => array( 'name' => 'HD Newsletter' ),
		'empty1' => array( 'name' => 'Not Set' ),
		'empty2' => array( 'name' => 'Not Set' ),
	);
	public $dir;
	public $meta;
	public $theme;
	public $theme_data;
	public $theme_style;
	public $theme_template;
	public $supports = array();
	public $title;
	public $campaign;
	public $source;
	public $banner_img = false;
	public $link = false;
	
	public function __construct(){
		$this->dir = \get_stylesheet_directory_uri();
	}
	
	public function set_email( $post_id ){
		$this->meta = get_post_meta( $post_id , '_email', true );
		$this->theme = ( isset( $this->meta['theme'] ) )? $this->meta['theme'] : 'blank-white';
		$this->theme_data = ( isset( $this->themes[ $this->theme ] ) )? $this->themes[ $this->theme ] : array();
		$this->theme_style = ( isset( $this->theme_data['css'] ) )? $this->theme_data['css'] : 'blank-white';
		$this->theme_template =  ( isset( $this->theme_data['template'] ) )? $this->theme_data['template'] : $this->theme;
		if( array_key_exists( 'supports' , $this->theme_data ) ) $this->supports = $this->theme_data['supports'];
		$this->title = ( isset( $this->meta['title'] ) )? $this->meta['title'] : get_the_title( $post_id );
		if( 'Auto Draft' == $this->title  ) $this->title == '';
		if( in_array( 'banner', $this->supports ) ) {
			if( isset( $this->meta['banner_img'] ) ) $this->banner_img = $this->meta['banner_img'];
		}
		$this->campaign = ( isset( $this->meta['campaign'] ) )? $this->meta['campaign'] : $this->title;
		if( 'Auto Draft' == $this->campaign ) $this->campaign == '';
		$this->source = ( isset( $this->meta['source'] ) )? $this->meta['source'] : $this->title;
		if( 'Auto Draft' == $this->source ) $this->source == '';
		if( isset( $this->meta['link'] ) &&  $this->meta['link'] ) $this->link = $this->meta['link'];
	}
	
	public function save_meta( $post_id ) {
		
		if ( ! isset( $_POST['email_nonce'] ) ) return;
		if ( ! wp_verify_nonce( $_POST['email_nonce'], 'submit_email' ) ) return;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;
		
		$fields = array( 
			'theme',
			'title',
			'campaign',
			'source',
			'link',
			'banner_img',
			'footer_img', );
		$clean_instance = false;
		foreach( $fields as $field ){
			if( isset( $_POST[ '_email' ][ $field ] ) ){
				$clean_instance[ $field ] = \sanitize_text_field( $_POST[ '_email' ][ $field ] );
				
			}
		}
		
		if( $clean_instance ) \update_post_meta( $post_id , '_email' , $clean_instance );
	}
	
}

class email_controller{
	public $email_model;
	
	public function __construct( $model ){
		$this->email_model = $model;
	}
	
	public function set_email( $post_id ){
		$this->email_model->set_email( $post_id );
	}
	
	public function save_meta( $post_id ){
		$this->email_model->save_meta( $post_id );
	}
}

class email_view {
	private $email_controller;
	private $email_model;
	
	public function __construct( $controller , $model ){
		$this->email_controller = $controller;
		$this->email_model = $model;
	}
	
	public function output_editor(){
		include 'inc/editor.php';
	}
	
	
}
$CAHNRSWP_email = new init_html_email();