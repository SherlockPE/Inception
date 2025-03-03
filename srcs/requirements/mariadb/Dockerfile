# El Dockerfile siempre parte de una imagen creada, mediante la instrucción FROM. 
FROM alpine:3.20.5

# Instalar dependencias
RUN apk update\
    && apk add --no-cache\
    mariadb mariadb-client\
    envsubst

#Configuration file for database
COPY ./conf/mariadb-conf.cnf /etc/my.cnf.d/mariadb-server.cnf

#Setup script
COPY ./tools/script.sh /
COPY ./conf/database-setup.sql /database-setup.sql
RUN chmod +x /script.sh

# Directory's for the database
RUN mkdir -p /run/mysqld \
    && mkdir -p /var/lib/mysql \
    && chmod 777 /run/mysqld \
    && chmod 777 /var/lib/mysql

# Users and permissions
RUN adduser mysql www-data \
    && adduser -D www-data -G www-data

# Inicializar la base de datos MySQL en el directorio /var/lib/mysql usando el usuario mysql
RUN /usr/bin/mysql_install_db --user=mysql --datadir=/var/lib/mysql --force



EXPOSE 3306

CMD [ "/script.sh" ] 
