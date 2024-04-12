# ducos-wordpress-dev-scripts

Some handy scripts for easier WordPress development. This is NOT meant to be installed on any live environment, just for local development.

To start, put the following line in your `wp-config.php` file to enable the dev tools.

```php
define('DWD_ENABLE', true); // Enable the dev tools.
```

## SMTP

The devtools contains a helper for easily handling email sent through the WordPress `wp_mail` function. You can use a mail sink like MailPit or MailHog. To enable this, set the following constants in your `wp-config.php` file.

```php
define('DWD_ENABLE_MAIL', true); // Enables the mail helper.
define('DWD_MAIL_HOST', 'mailpit'); // Sets the SMTP mail host for local handling of email. Default 'mailpit'.
define('DWD_MAIL_PORT', 1025); // Sets the SMTP port. Default '1025'.
```

To test the SMTP functionality, call the URL `/wp-admin/admin-ajax.php?action=dwd_test_smtp` on your WordPress site. If you see `bool(true)`, it works correctly. If `0` is returned, the SMTP helper is not enabled.

## Add admin user

A simple helper is added to add an admin user when a request is made to the WordPress site. You need to add the following line to the `wp-config.php` file to enable the helper.

```php
define('DWD_ENABLE_ADMIN_USER_HELPER', true); // Enable the helper
define('DWD_ADMIN_USERNAME', 'admin-user'); // Define the admin user. Default 'admin-user'.
define('DWD_ADMIN_PASSWORD', 'password'); // Define the admin user. Default 'password'.
```