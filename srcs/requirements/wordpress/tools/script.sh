#!bin/sh

# COLORS
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[0;33m'
CYAN='\033[0;36m'
PINK='\033[0;35m'
WHITE='\033[1;37m'
GREEN_LIGHT='\033[1;32m'
NC='\033[0m'

# Create a new wp-config.php file
# envsubst < /tmp/wp-config.php > /usr/share/webapps/wordpress/wp-config.php
envsubst '$DB_NAME $MDB_USER $MDB_USER_PASSWORD' < /tmp/wp-config.php > /usr/share/webapps/wordpress/wp-config.php

#Enlace simbolico para que wp pueda funcionar con php82
ln -s /usr/bin/php82 /usr/bin/php

# while ! ping -q -c 1 mariadb:3306 >/dev/null ; do sleep 1; done;

#Instalación de wordpress
echo $WHITE "Instalando wordpresssszzzzzz..." $NC
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
echo $GREEN_LIGHT "Creando usuario ${WORDPRESS_USER}" $NC
wp user create \
    ${WORDPRESS_USER}\
    a@quien.leimporta\
    --user_pass="${WORDPRESS_USER_PASSWORD}" \
    --path="/usr/share/webapps/wordpress"

# Start php-fpm service with no daemonize
php-fpm82 -F
