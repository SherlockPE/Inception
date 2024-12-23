# El Dockerfile siempre parte de una imagen creada, mediante la instrucción FROM. 
FROM alpine:3.20

# Actualizar los paquetes (solo por si acaso)
RUN apk update && apk upgrade

# Instalar dependencias de nginx
RUN apk add mariadb
