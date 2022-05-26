<?php
function my_custom_wc_theme_support(){
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme' , 'my_custom_wc_theme_support');

function initTheme()
{
    register_nav_menus(
        array(
            'header-top' => 'Menu top',
            'header-main' => 'Menu main',
            'header-bot' => 'Menu bot',
            'header-bot-icon' => 'Menu bot icon',
        )
    );


    // lấy silebar
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Cột bên',
            'id' => 'sidebar',
        ));
    }

    // lấy lượt view cao nhất
    function setpostview($postID)
    {
        $count_key = 'views';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    function getpostviews($postID)
    {
        $count_key = 'views';
        $count = get_post_meta($postID, $count_key, true);
        if ($count == '') {
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }
}
add_action('init', 'initTheme');


function tao_custom_post_type(){
   
    $label = array(
        'name' => 'Các sản phẩm', //Tên post type dạng số nhiều
        'singular_name' => 'Sản phẩm' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng sản phẩm', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('sanpham', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
 
}
add_action('init', 'tao_custom_post_type');

// tính % giảm giá
function percentSale($price , $price_sale){
    $sale =($price_sale * 100)/$price;
    $percent = 100 - $sale;
    return number_format($percent);
}

// Xuan Loi 
function my_login_redirect( $redirect_to, $request, $user ) {
	global $user;
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for admins
		if ( in_array( "administrator", $user->roles ) ) {
			// redirect them to the default place
			return "http://localhost/wordpress";
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}
add_filter( "login_redirect", "my_login_redirect", 10, 3 );
function redirect_login_page() {
    $login_page  = home_url( "http://localhost/wordpress/login/" );
    $page_viewed = basename($_SERVER["REQUEST_URI"]);  
    if( $page_viewed == "wp-login.php" && $_SERVER["REQUEST_METHOD"] == "GET") {
        wp_redirect($login_page);
        exit;
    }
}
add_action("init","redirect_login_page");

/* Kiểm tra lỗi đăng nhập */
function login_failed() {
    $login_page  = home_url("http://localhost/wordpress/login/" );
    wp_redirect( $login_page ."?login=failed" );
    exit;
}
add_action("wp_login_failed","login_failed" );  
function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url("http://localhost/wordpress/login/" );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter("authenticate","verify_username_password", 1, 3);