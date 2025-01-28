# El Dockerfile siempre parte de una imagen creada, mediante la instrucción FROM. 
FROM alpine:3.20

# Actualizar los paquetes (solo por si acaso)
RUN apk update && apk upgrade

# Instalar dependencias de nginx
RUN apk add mariadb

COPY ./tools/mariadb-conf.sh /

RUN ["chmod", "+x", "/mariadb-conf.sh"]

EXPOSE 3306

# Solo puede haber un CMD por Dockerfile
CMD [ "/mariadb-conf.sh" ] 
