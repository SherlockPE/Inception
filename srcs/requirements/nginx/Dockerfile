# El Dockerfile siempre parte de una imagen creada, mediante la instrucción FROM. 

FROM alpine:3.19

# Actualizar los paquetes (solo por si acaso)
RUN apk update && apk upgrade


# Instalar dependencias de nginx
RUN apk add nginx

# RUN cat /etc/nginx/nginx.conf

EXPOSE 443

COPY ./tools/nginx-conf.sh /

CMD [ "/nginx-conf.sh" ]