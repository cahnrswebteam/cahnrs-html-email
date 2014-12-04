<?php
class CAHNRSWPEMAIL_send_mail_init {
	protected $ty;
	protected $st;
	protected $email_code;
	
	public function __construct(){
		
		add_filter( 'wp_mail_content_type', array( $this , 'set_html_content_type' ) );
		
		if( is_user_logged_in() && current_user_can( 'edit_posts' ) ) {
			
			if( isset( $_POST['em'] ) && isset( $_POST['ty'] ) && isset( $_POST['st'] ) ){
				
				if( !$_POST['em'] ) {
					echo 'Error 01. Please try again.';
				}
				else if( !$_POST['ty'] ){
					 echo 'Error 02. Please try again.';
				}
				else if( !$_POST['st'] ) {
					echo 'How about an email address to send to?';
				} else {
					$this->email_code = $_POST['em'];
					$this->ty = $_POST['ty'];
					$this->st = $_POST['st'];
					$this->compose_email();
					$this->send_mail();
					echo 'Success! Your email has been sent.';
				}
			} else {
				echo 'Don\'t seem to have all the right data. Please try agian.';
			}
		} else {
			echo 'Sorry, you don\'t have permissions to send emails.';
		}
	}
	
	protected function send_mail(){
		$subject = 'hello world';
		$headers = 'From: CAHNRS Webteam <cahnrs.webteam@wsu.edu>' . "\r\n";
		wp_mail( $this->st, $subject, $this->email_code, $headers );
		remove_filter( 'wp_mail_content_type', array( $this , 'set_html_content_type' ) );
	}
	
	protected function compose_email(){
		$this->email_code = $this->get_email_header() . $this->email_code . $this->get_email_footer();
		$this->email_code = wordwrap( $this->email_code, 60 );
		$this->email_code = str_replace( '&quot;' , '"', $this->email_code );
		if ( get_magic_quotes_gpc() ) $this->email_code = stripslashes( $this->email_code );
	}
	
	public function set_html_content_type(){
		return 'text/html';
	}
	
	public function get_email_header(){
		$h = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$h .= '<html xmlns="http://www.w3.org/1999/xhtml">';
		$h .= '<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		$h .= '<title>Demystifying Email Design</title>';
		$h .= '<meta name="viewport" content="width=device-width, initial-scale=1.0"/></head>';
		$h .= '<style>';
		ob_start();
		include CAHNRSWPEMAILDIR.'/theme-css/blank-white.php';
		$h .= ob_get_clean();
		$h .= '</style>';
		$h .= '<body bgcolor="#cccccc" style="background-color: #cccccc; font-family: Verdana,sans-serif; font-size: 12px;">';
		return $h;
	}
	
	public function get_email_footer(){
		$h = '</body></html>';
		return $h;
	}
}

$CAHNRSWPEMAIL_send_mail = new CAHNRSWPEMAIL_send_mail_init();
