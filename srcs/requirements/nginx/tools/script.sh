#!bin/sh

# Crear directorio para SSL
mkdir -p etc/nginx/ssl

# Reemplazar variables de entorno
envsubst '${LOGIN}' < /etc/nginx/http.d/inception.conf.bk > /etc/nginx/http.d/inception.conf

# Generar clave privada y certificado autofirmado
openssl req -x509 -nodes -days 42 -newkey rsa:4096 -keyout /etc/nginx/ssl/${LOGIN}.key -out /etc/nginx/ssl/${LOGIN}.crt -subj "/C=ES/ST=Madrid/L=Madrid/O=42Madrid/CN=${DOMAIN}"

adduser -D www-data -G www-data

chown -R www-data:www-data /usr/share/webapps/

# Iniciar nginx
nginx -g 'daemon off;'