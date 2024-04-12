<?php
// Mailpit is used to debug mail locally. Only used if TEST_WITH_MAILPIT constant is true.
if (defined('DWD_ENABLE_MAIL') && DWD_ENABLE_MAIL) {
    add_action('phpmailer_init', 'starter_setup_phpmailer', 0);
    function starter_setup_phpmailer($phpmailer)
    {
        $phpmailer->isSMTP();
        $phpmailer->Host = DwdHelpers::getConstantOrDefault("DWD_MAIL_HOST", "mailpit");
        $phpmailer->SMTPAuth = false;
        $phpmailer->Port = DwdHelpers::getConstantOrDefault("DWD_MAIL_PORT", 1025);
    }

    add_action('wp_mail_failed', 'on_mail_error');
    function on_mail_error($wp_error)
    {
        echo "<pre>";
        print_r($wp_error);
        echo "</pre>";
    }

    add_filter('wp_mail_from', 'starter_wp_mail_from');
    function starter_wp_mail_from($original_email_address)
    {
        return 'info@example.com';
    }
}

function dwd_test_smtp() {
	var_dump(wp_mail( "info@example.com", "Test mail from Duco's WordPress dev scripts", "This is a test message." ));
	exit();
}

add_action('wp_ajax_nopriv_dwd_test_smtp','dwd_test_smtp');
add_action('wp_ajax_dwd_test_smtp','dwd_test_smtp');