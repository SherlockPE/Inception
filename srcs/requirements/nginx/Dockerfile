FROM alpine:3.20.5

RUN apk update\
    && apk add\
    nginx\
    openssl\
    envsubst

COPY ./conf/nginx.conf /etc/nginx/nginx.conf
COPY ./tools/nginx-conf.sh /

RUN ["chmod", "+x", "/nginx-conf.sh"]

EXPOSE 443

CMD [ "/nginx-conf.sh" ]