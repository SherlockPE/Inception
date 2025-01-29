#!bin/sh

export LOGIN=flopez-r

# Crear directorio para SSL
mkdir -p etc/nginx/ssl

# Reemplazar variables de entorno
mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf.bk
envsubst < /etc/nginx/nginx.conf.bk > /etc/nginx/nginx.conf

# Generar clave privada y certificado autofirmado
openssl req -x509 -nodes -days 42 -newkey rsa:4096 -keyout /etc/nginx/ssl/${LOGIN}.key -out /etc/nginx/ssl/${LOGIN}.crt -subj "/C=ES/ST=Madrid/L=Madrid/O=42Madrid/CN=flopez-r.42.fr"

# Iniciar nginx
# nginx -g 'daemon off;'
sleep infinity & wait