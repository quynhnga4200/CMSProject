<?php
/* 
* Template Name: Trang Login
*/
?>
<div class="login-area">
	<div class="note">
		<h3>Đăng nhập</h3>
		<p>Hãy sử dụng tài khoản của bạn để đăng nhập vào website. Nếu chưa có tài khoản, <a href="<?php bloginfo("url"); ?>/wp-login.php?action=register">đăng ký tại đây</a>.</p>
	</div>
	<div class="form">
		<?php
			$args = array(
				"redirect"       => site_url( $_SERVER["REQUEST_URI"] ),
				"form_id"        => "dangnhap", //Để dành viết CSS
				"label_username" => __( "Tên tài khoản" ),
				"label_password" => __( "Mật khẩu" ),
				"label_remember" => __( "Ghi nhớ" ),
				"label_log_in"   => __( "Đăng nhập" ),
			);
			wp_login_form($args);
		?>
	</div>
    
</div>
 
