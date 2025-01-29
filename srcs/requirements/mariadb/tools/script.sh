#!/bin/sh


#Sustituir variables de entorno en el archivo de configuracion
mv /database-setup.sql /database-env.bk
envsubst < /database-env.bk > /database-setup.sql


#Correr el servidor de mariadb directamente en primer plano
#usando el archivo de configuracion y el usuario mysql
#para que tenga los permisos necesarios
mariadbd --user=mysql --init-file=/database-setup.sql





#mariadbd-safe --user=mysql --init-file=/database-setup.sql