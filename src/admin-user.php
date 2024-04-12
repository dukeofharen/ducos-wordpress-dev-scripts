<?php
add_action( 'init', function () {
	if ( DwdHelpers::getConstantOrDefault( "DWD_ENABLE_ADMIN_USER_HELPER", false ) ) {
		$username = DwdHelpers::getConstantOrDefault( "DWD_ADMIN_USERNAME", "admin-user" );
		$password = DwdHelpers::getConstantOrDefault( "DWD_ADMIN_PASSWORD", "password" );
		$user = get_user_by( 'login', $username );
		if ( ! $user ) {
			// User doesn't exist; create it now.
			$user_id = wp_create_user( $username, $password, "$username@example.com" );
			if ( ! is_wp_error( $user_id ) ) {
				$user = get_user_by( 'id', $user_id );
				$user->set_role( 'administrator' );
			}

			die( "User '$username' created with password '$password'." );
		}
	}
} );
