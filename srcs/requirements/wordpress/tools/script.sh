#!bin/sh

# Create a new wp-config.php file
# envsubst < /tmp/wp-config.php > /usr/share/webapps/wordpress/wp-config.php
envsubst '$DB_NAME $MDB_USER $MDB_USER_PASSWORD' < /tmp/wp-config.php > /usr/share/webapps/wordpress/wp-config.php

#Enlace simbolico para que wp pueda funcionar con php82
ln -s /usr/bin/php82 /usr/bin/php

#Instalación de wordpress
wp core install \
    --path="/usr/share/webapps/wordpress" \
    --url="${DOMAIN}" \
    --title="${WORDPRESS_TITLE}" \
    --admin_user="${WORDPRESS_ADMIN_USER}" \
    --admin_password="${WORDPRESS_ADMIN_PASSWORD}" \
    --admin_email="${WORDPRESS_USERS_EMAIL}" \
    --locale="ES" \
    --skip-email

#Creacion de usuario normalucho
wp user create \
    ${WORDPRESS_USER}\
    a@quien.leimporta\
    --user_pass="${WORDPRESS_USER_PASSWORD}" \
    --path="/usr/share/webapps/wordpress"

# Start php-fpm service with no daemonize
php-fpm82 -F
