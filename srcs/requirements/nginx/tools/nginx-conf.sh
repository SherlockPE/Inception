#!bin/sh

# Hello there!
# General Kenobi

# Crear directorio para SSL
mkdir -p etc/nginx/ssl

# Generar clave privada y certificado autofirmado
openssl req -x509 -nodes -days 42 -newkey rsa:4096 -keyout /etc/nginx/ssl/${LOGIN}.key -out /etc/nginx/ssl/${LOGIN}.crt -subj "/C=ES/ST=Madrid/L=Madrid/O=42Madrid/CN=flopez-r.42.fr"

# Iniciar nginx
nginx -g 'daemon off;'