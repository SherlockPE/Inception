# El Dockerfile siempre parte de una imagen creada, mediante la instrucción FROM. 
FROM alpine:3.20.5

# Actualizar los paquetes (solo por si acaso)
RUN apk update && apk add --no-cache \
    php82\
    php82-fpm\
    php82-cgi\
    php82-cli\
    php82-phar\
    php82-mysqli\
    php82-iconv\
    php82-mbstring\
    fcgi\
    envsubst\
    mysql-client

# Crear directorios de trabajo
RUN mkdir -p /usr/share/webapps/
RUN mkdir -p /var/www/localhost/htdocs/wordpress
RUN mkdir -p /run/php

# Creacion del usuario que usan los web servers para manejar procesos
RUN adduser -D www-data -G www-data

#Asignar permisos a las carpetas
RUN chown -R www-data:www-data /usr/share/webapps
RUN chown -R www-data:www-data /var/www/localhost/htdocs/wordpress
RUN chown -R www-data:www-data /run/php

# Descargar e instalar Wordpress
ADD https://wordpress.org/latest.tar.gz /usr/share/webapps/
RUN tar -xzf /usr/share/webapps/latest.tar.gz -C /usr/share/webapps/
RUN rm /usr/share/webapps/latest.tar.gz
RUN ln -s /usr/share/webapps/wordpress/ /var/www/localhost/htdocs/wordpress

# Descargar e instalar WP_CLI
ADD https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar /usr/local/bin
RUN mv /usr/local/bin/wp-cli.phar /usr/local/bin/wp
RUN chmod +x /usr/local/bin/wp

# RUN mv /usr/local/bin/wp /usr/local/bin/wp-cli

EXPOSE 9000

# Copiar archivos de configuración
COPY ./conf/wp-config.php /tmp/wp-config.php
COPY ./conf/www.conf /etc/php8/php-fpm.d/www.conf

# Copiar script de ejecución
COPY ./tools/script.sh /script.sh
RUN chmod +x /script.sh

# Ejecutar script
CMD [ "/script.sh" ]