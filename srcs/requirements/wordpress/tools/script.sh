#!bin/sh


# Create a new wp-config.php file
envsubst < /tmp/wp-config.php > /usr/share/webapps/wordpress/wp-config.php


sleep infinity

# Start php-fpm service with no daemonize
# php-fpm82 -F
