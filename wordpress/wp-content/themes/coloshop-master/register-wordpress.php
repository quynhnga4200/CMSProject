<?php
/*
  Plugin Name: Custom Registration
  Plugin URI: https://code.tutsplus.com
  Description: Updates user rating based on number of posts.
  Version: 1.0
  Author: Quynh Nga
  Author URI: http://tech4sky.com
 */


function registration_form($username, $password, $email, $website, $first_name, $last_name, $nickname, $bio)
{
    echo '
    <style>
    div {
      margin-bottom:2px;
    }
     
    input{
        margin-bottom:4px;
    }
    </style>
    ';

    echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
    <div>
    <label for="username">Username <strong>*</strong></label>
    <input type="text" name="username" value="' . (isset($_POST['username']) ? $username : null) . '">
    </div>
     
    <div>
    <label for="password">Password <strong>*</strong></label>
    <input type="password" name="password" value="' . (isset($_POST['password']) ? $password : null) . '">
    </div>
     
    <div>
    <label for="email">Email <strong>*</strong></label>
    <input type="text" name="email" value="' . (isset($_POST['email']) ? $email : null) . '">
    </div>
     
    <div>
    <label for="website">Website</label>
    <input type="text" name="website" value="' . (isset($_POST['website']) ? $website : null) . '">
    </div>
     
    <div>
    <label for="firstname">First Name</label>
    <input type="text" name="fname" value="' . (isset($_POST['fname']) ? $first_name : null) . '">
    </div>
     
    <div>
    <label for="website">Last Name</label>
    <input type="text" name="lname" value="' . (isset($_POST['lname']) ? $last_name : null) . '">
    </div>
     
    <div>
    <label for="nickname">Nickname</label>
    <input type="text" name="nickname" value="' . (isset($_POST['nickname']) ? $nickname : null) . '">
    </div>
     
    <div>
    <label for="bio">About / Bio</label>
    <textarea name="bio">' . (isset($_POST['bio']) ? $bio : null) . '</textarea>
    </div>
    <input type="submit" name="submit" value="Register"/>
    </form>
    ';
}


function registration_validation($username, $password, $email, $website, $first_name, $last_name, $nickname, $bio)
{
    global $reg_errors;
    $reg_errors = new WP_Error;
    //Ki???m tra username v?? password c?? tr???ng ko
    if (empty($username) || empty($password) || empty($email)) {
        $reg_errors->add('field', 'Required form field is missing');
    }
    //Ki???m tra ????? d??i username < 4
    if (4 > strlen($username)) {
        $reg_errors->add('username_length', 'Username too short. At least 4 characters is required');
    }
    //Ki???m tra ????? d??i username c?? t???n t???i ch??a
    if (username_exists($username)) {
        $reg_errors->add('user_name', 'Sorry, that username already exists!');
    }
    //Ki???m tra ????? d??i username c?? h???p l???
    if (!validate_username($username)) {
        $reg_errors->add('username_invalid', 'Sorry, the username you entered is not valid');
    }
    //Ki???m tra pass d??i h??n 5 k?? t???
    if (5 > strlen($password)) {
        $reg_errors->add('password', 'Password length must be greater than 5');
    }
    //Ki???m tra d???nh d???ng email
    if (!is_email($email)) {
        $reg_errors->add('email_invalid', 'Email is not valid');
    }
    //Ki???m tra email ???? ????ng k?? ch??a
    if (email_exists($email)) {
        $reg_errors->add('email', 'Email Already in use');
    }
    //N???u tr?????ng website ???? ???????c ??i???n, h??y ki???m tra xem n?? c?? h???p l??? hay kh??ng
    if (!empty($website)) {
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $reg_errors->add('website', 'Website is not a valid URL');
        }
    }
    //Duy???t t???ng l???i
    if (is_wp_error($reg_errors)) {

        foreach ($reg_errors->get_error_messages() as $error) {

            echo '<div>';
            echo '<strong>ERROR</strong>:';
            echo $error . '<br/>';
            echo '</div>';
        }
    }
}


function complete_registration()
{
    global $reg_errors, $username, $password, $email, $first_name, $last_name;
    if (1 > count($reg_errors->get_error_messages())) {
        $userdata = array(
            'user_login'    =>   $username,
            'user_email'    =>   $email,
            'user_pass'     =>   $password,
            'first_name'    =>   $first_name,
            'last_name'     =>   $last_name,
        );
        $user = wp_insert_user($userdata);
        echo 'Registration complete. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.';
    }
}
function custom_registration_function()
{
    if (isset($_POST['submit'])) {
        registration_validation(
            $_POST['username'],
            $_POST['password'],
            $_POST['email'],
            $_POST['website'],
            $_POST['fname'],
            $_POST['lname'],
            $_POST['nickname'],
            $_POST['bio']
        );

        // sanitize user form input
        global $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio;
        $username   =   sanitize_user($_POST['username']);
        $password   =   esc_attr($_POST['password']);
        $email      =   sanitize_email($_POST['email']);
        $website    =   esc_url($_POST['website']);
        $first_name =   sanitize_text_field($_POST['fname']);
        $last_name  =   sanitize_text_field($_POST['lname']);
        $nickname   =   sanitize_text_field($_POST['nickname']);
        $bio        =   esc_textarea($_POST['bio']);

        // call @function complete_registration to create the user
        // only when no WP_error is found
        complete_registration(
            $username,
            $password,
            $email,
            $website,
            $first_name,
            $last_name,
            $nickname,
            $bio
        );
    }

    registration_form(
        $username,
        $password,
        $email,
        $website,
        $first_name,
        $last_name,
        $nickname,
        $bio
    );
}
// Register a new shortcode: [cr_custom_registration]
add_shortcode('cr_custom_registration', 'custom_registration_shortcode');

// The callback function that will replace [book]
function custom_registration_shortcode()
{
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}
?>

<?php custom_registration_function(); ?>