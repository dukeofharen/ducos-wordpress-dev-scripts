# ducos-wordpress-dev-scripts

Some handy scripts for easier WordPress development. This is NOT meant to be installed on any live environment, just for local development.

To start, put the following line in your `wp-config.php` file to enable the dev tools.

```php
define('DWD_MAIL', true); // Enable the dev tools.
```

## SMTP

The devtools contains a helper for easily handling email sent through the WordPress `wp_mail` function. You can use a mail sink like MailPit or MailHog. To enable this, set the following constants in your `wp-config.php` file.

```php
define('DWD_ENABLE_MAIL', true); // Enables the mail helper.
define('DWD_MAIL_HOST', 'mailpit'); // Sets the SMTP mail host for local handling of email.
define('DWD_MAIL_PORT', 1025); // Sets the SMTP port.
```