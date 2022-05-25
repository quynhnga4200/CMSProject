
<?php
	echo ("hello");
	function registration_form( $username, $password, $email, $first_name, $last_name ) {
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
    <input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
    </div>
     
    <div>
    <label for="password">Password <strong>*</strong></label>
    <input type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
    </div>
     
    <div>
    <label for="email">Email <strong>*</strong></label>
    <input type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
    </div>
     
    <div>
    <label for="firstname">First Name</label>
    <input type="text" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
    </div>
     
    <div>
    <label for="website">Last Name</label>
    <input type="text" name="lname" value="' . ( isset( $_POST['lname']) ? $last_name : null ) . '">
    </div>
    
    <input type="submit" name="submit" value="Register"/>
    </form>
    ';
	}	

	function registration_validation( $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio )  {
		global $reg_errors;
		$reg_errors = new WP_Error;
		//Kiểm tra username và password có trống ko
		if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
			$reg_errors->add('field', 'Required form field is missing');
		}
		//Kiểm tra độ dài username < 4
		if ( 4 > strlen( $username ) ) {
			$reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
		}
		//Kiểm tra độ dài username có tồn tại chưa
		if ( username_exists( $username ) ){
			$reg_errors->add('user_name', 'Sorry, that username already exists!');
		}
		//Kiểm tra độ dài username có hợp lệ
		if ( ! validate_username( $username ) ) {
			$reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
		}
		//Kiểm tra pass dài hơn 5 ký tự
		if ( 5 > strlen( $password ) ) {
			$reg_errors->add( 'password', 'Password length must be greater than 5' );
		}
		//Kiểm tra dịnh dạng email
		if ( !is_email( $email ) ) {
			$reg_errors->add( 'email_invalid', 'Email is not valid' );
		}
		//Kiểm tra email đã đăng ký chưa
		if ( email_exists( $email ) ) {
			$reg_errors->add( 'email', 'Email Already in use' );
		}
		//Duyệt từng lỗi
		if ( is_wp_error( $reg_errors ) ) {
 
			foreach ( $reg_errors->get_error_messages() as $error ) {
			 
				echo '<div>';
				echo '<strong>ERROR</strong>:';
				echo $error . '<br/>';
				echo '</div>';
				 
			}
		 
		}
    		
	}
?>

