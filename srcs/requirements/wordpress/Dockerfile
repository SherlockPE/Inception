# El Dockerfile siempre parte de una imagen creada, mediante la instrucción FROM. 
FROM alpine:3.20.5

# Actualizar los paquetes (solo por si acaso)
RUN apk update && apk upgrade

COPY ./tools/script.sh /

RUN ["chmod", "+x", "/script.sh"]

CMD [ "/script.sh" ]