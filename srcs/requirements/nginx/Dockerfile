FROM alpine:3.20

RUN apk update && apk add --no-cache\
    nginx\
    openssl\
    envsubst

COPY ./conf/nginx.conf /etc/nginx/http.d/inception.conf.bk
COPY ./tools/script.sh /script.sh

RUN chmod +x /script.sh

CMD [ "/script.sh" ]